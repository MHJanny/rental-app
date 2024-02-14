<?php

namespace App\Http\Controllers\Property;

use App\Models\Category;
use App\Models\Property;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Requests\PropertyRequest;
use Illuminate\Support\Facades\Storage;

class PropertyController extends Controller
{
    public function create()
    {
        $categories = Category::whereNull('deleted_at')->get();
        return view('backend.property.add-rental',['categories' => $categories]);
    }
    
    public function store(PropertyRequest $request)
    {
        $data = $request->validated(); 
        if ($request->hasFile('image')) {
            $property = Property::create($data);
            $property->addMedia($request->file('image'))->toMediaCollection('property-images');
        } else {
            return redirect()->back()->with('property-error', 'No image uploaded.');
        }
        return redirect()->back()->with('property-success', 'Property created successfully.');
   
    }

}
