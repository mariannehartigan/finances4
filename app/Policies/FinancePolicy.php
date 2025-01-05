<?php

namespace App\Policies;

use App\Models\User;

class FinancePolicy
{
    /**
     * Create a new policy instance.
     */
    public function __construct()
    {
        //
    }

    public function read(User $user): bool
    {
        return $user->role == 'reader';
    }
}
