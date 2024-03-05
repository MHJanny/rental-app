<?php

namespace App\Http\Controllers;

use App\Constants\Role;
use App\Models\Booking;
use App\Models\Property;
use Illuminate\Http\Request;

class BookingController extends Controller
{
    public function index()
    {
        if (auth()->user()->role == Role::USER) {
            $bookings = auth()->user()->bookings()->with('property')->paginate(20);
        } elseif (auth()->user()->role == Role::RENTOWNER) {
            $bookings = Booking::whereIn('property_id', auth()->user()->properties->pluck('id'))->paginate(20);
        } elseif (auth()->user()->role == Role::ADMINISTRATOR) {
            $bookings = Booking::paginate(20);
        }

        return view('backend.bookings.index', compact('bookings'));
    }

    public function create($uuid)
    {
        $this->authorize('create', Booking::class);
        $property = Property::with('media')->where('uuid', $uuid)->firstOrFail();

        return view('frontend.checkout', ['property' => $property]);
    }

    public function store(Request $request)
    {
        $this->authorize('create', Booking::class);
        dd($request->all());
    }

    public function edit(Booking $booking)
    {
        //
    }

    public function update(Request $request, Booking $booking)
    {
        $this->authorize('update', $booking);
        $status = $request->status;

        if (in_array($status, ['approved', 'rejected'])) {
            $booking->update(['status' => $status]);

            return response()->json(['success' => 'Booking updated successfully']);
        }

        return response()->json(['error' => 'Something went wrong'], 400);
    }

    public function destroy(Booking $booking)
    {
        $this->authorize('delete', $booking);
        $booking->delete();

        return response()->json(['success' => 'Booking deleted successfully']);
    }
}
