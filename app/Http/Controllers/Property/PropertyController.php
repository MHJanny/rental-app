<?php

namespace App\Http\Controllers\Property;

use App\Constants\Role;
use App\Models\Category;
use App\Models\Property;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Requests\PropertyRequest;
use Illuminate\Support\Facades\Storage;
use App\Http\Requests\PropertyUpdateRequest;

class PropertyController extends Controller
{
    public function index()
    {
        if(auth()->user()->role === Role::ADMINISTRATOR) {
            $properties = Property::with('user')->get();
        } else {
            $properties = Property::where('user_id', auth()->user()->id)
            ->whereNull('deleted_at')
            ->get();
        }
        return view('backend.property.properties', ['properties' => $properties]);
    }

    public function create()
    {
        $this->authorize('create', Property::class);
        $categories = Category::whereNull('deleted_at')->get();
        return view('backend.property.add-property',['categories' => $categories]);
    }
    
    public function store(PropertyRequest $request)
    {
       
        $this->authorize('create', Property::class);
        $data = $request->validated(); 
        $data['user_id'] = auth()->user()->id;
        if ($request->hasFile('image')) {
            $property = Property::create($data);
            $property->addMedia($request->file('image'))->toMediaCollection('property-images');
        } else {
            return redirect()->back()->with('property-error', 'No image uploaded.');
        }
        return redirect()->back()->with('property-success', 'Property created successfully.');
   
    }

    public function edit($uuid)
    {
        $property = Property::where('uuid', $uuid)->with('category','media')->firstOrFail();
        $this->authorize('update', [$property, auth()->user()]);
        $categories = Category::all();
        return view('backend.property.edit-property', ['property'=> $property, 'categories' => $categories]);
    }

    public function update(PropertyUpdateRequest $request, string $uuid)
    {
        if(auth()->user()->role === Role::ADMINISTRATOR) {
            $data = $request->validated();
            $data['status'] = $data['status'];
        } else {
            $data = $request->validated();
        }
        $property = Property::where('uuid', $uuid)->firstOrFail();
        $this->authorize('update', [$property, auth()->user()]);
       
        if ($request->hasFile('image')) {
            if ($property->getFirstMedia('property-images')) {
                $property->getFirstMedia('property-images')->delete();
            }
            $property->addMedia($request->file('image'))->toMediaCollection('property-images');
        }
        $property->update($data);
        return redirect()->route('property.index')->with('property-update-success', 'Property updated successfully.');
    }

    public function destroy($uuid)
    {
        $property = Property::where('uuid', $uuid)->firstOrFail();
        $this->authorize('delete', $property);
        $property->delete();
        return redirect()->back()->with('property-deleted', 'Property deleted successfully.');
    }

    

}
