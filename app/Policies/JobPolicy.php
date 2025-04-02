<?php

namespace App\Policies;

use App\Models\Job;
use App\Models\User;
use Illuminate\Auth\Access\Response;

class JobPolicy
{
    /**
     * Gate for delete.
     */

    public function edit(User $user, Job $job): bool
    {
        // return $job->employer->user->is($user);
        return optional($job->employer->user)->is($user) ?? false; //null problem sovler "optional"
    }
}
