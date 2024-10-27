<?php

namespace App\Policies;

use App\Models\User;
use App\Models\Job;
use Illuminate\Auth\Access\Response;

class JobPolicy
{
    /**
     * Gate for delete.
     */

    public function edit(User $user, Job $job): bool
    {
        return $job->employer->user->is($user);
    }
}
