<?php

namespace App\Policies;

use App\Constants\Role;
use App\Models\User;
use Illuminate\Auth\Access\HandlesAuthorization;

class MenuPolicy
{
    use HandlesAuthorization;

    public function viewRentals(User $user)
    {
        return $user->role === Role::RENTOWNER || $user->role === Role::ADMINISTRATOR;
    }

    public function viewReviews(User $user)
    {
        return $user->role === Role::ADMINISTRATOR;
    }

    public function viewUsers(User $user)
    {
        return $user->role === Role::ADMINISTRATOR;
    }
}
