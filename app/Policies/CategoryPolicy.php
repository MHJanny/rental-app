<?php

namespace App\Policies;

use App\Models\User;
use App\Constants\Role;
use App\Models\category;
use Illuminate\Auth\Access\Response;

class CategoryPolicy
{
    /**
     * Determine whether the user can view any models.
     */
    public function viewAny(User $user)
    {
        //
    }

    /**
     * Determine whether the user can view the model.
     */
    public function view(User $user) : bool
    {
        return $user->role === Role::ADMINISTRATOR;
    }

    /**
     * Determine whether the user can create models.
     */
    public function create(User $user) : bool
    {
        return $user->role === Role::ADMINISTRATOR;
    }

    /**
     * Determine whether the user can update the model.
     */
    public function update(User $user) :bool
    {
        return $user->role === Role::ADMINISTRATOR;
    }

    /**
     * Determine whether the user can delete the model.
     */
    public function delete(User $user, category $category): bool
    {
        return $user->role === Role::ADMINISTRATOR;
    }
    

    /**
     * Determine whether the user can restore the model.
     */
    public function restore(User $user, category $category)
    {
        $user->role === Role::ADMINISTRATOR;
    }

    /**
     * Determine whether the user can permanently delete the model.
     */
    public function forceDelete(User $user, category $category)
    {
        //
    }
}
