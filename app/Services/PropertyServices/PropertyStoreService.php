<?php

namespace App\Services\PropertyServices;

use App\Models\Property;
use Illuminate\Support\Facades\Auth;
use App\Http\Requests\PropertyRequest;

class PropertyStoreService
{
    public function __construct(public Property $property)
    {

    }
    public function createProperty(PropertyRequest $request)
    {
        $data = $request->validated(); 
        $data['user_id'] = Auth::user()->id;
        if (isset($data['image']) && $data['image']->isValid()) {
            $property = $this->property->create($data);
            $property->addMedia($data['image'])->toMediaCollection('property-images');
            return $property;
        }
        return false;
    }

}
