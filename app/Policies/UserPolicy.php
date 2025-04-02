<?php

namespace App\Policies;

use App\Models\Job;
use App\Models\User;
use Illuminate\Auth\Access\Response;
use Illuminate\Support\Facades\Auth;


class UserPolicy
{
    /**
     * Gate for delete and edit User himself.
     */
    public function editUser(User $user, User $updatedUser): bool
    {
        return Auth::id() === $updatedUser->id;
        // $user->id;
        // if (Auth::id() === $updatedUser->id) {
        //     dd($user->id, Auth::id(), $updatedUser->id);
        //     return true;
        // } else {
        //     dd($user->id, Auth::id(), $updatedUser->id);
        //     return false;
        // }

    }
}
