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
use App\Services\PropertyServices\PropertyStoreService;
use App\Services\PropertyServices\PropertyCreateService;

class PropertyController extends Controller
{
    public function index(PropertyCreateService $postCreateSerice)
    {
        $properties = $postCreateSerice->create();
        return view('backend.property.properties', ['properties' => $properties]);
    }

    public function create()
    {
        $this->authorize('create', Property::class);
        $categories = Category::whereNull('deleted_at')->get();
        return view('backend.property.add-property',['categories' => $categories]);
    }
    
    public function store(PropertyStoreService $postCreateSerice, PropertyRequest $request)
    {
       
        $this->authorize('create', Property::class);
        $property = $postCreateSerice->createProperty($request);
        if ($property) {
            return redirect()->back()->with('property-success', 'Property created successfully.');
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
            $data['is_featured'] = $data['is_featured'];
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
