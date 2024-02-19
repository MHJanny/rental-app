<?php

namespace App\Services\PropertyServices;

use App\Constants\Role;
use App\Models\Property;

class PropertyCreateService
{
    public function create()
    {
        if (auth()->user()->role === Role::ADMINISTRATOR) {
            return $properties = Property::with('user')->paginate(20);
        } else {
            return $properties = Property::with('user')
                ->where('user_id', auth()->user()->id)
                ->whereNull('deleted_at')
                ->paginate(20);
        }
        
    }
}
