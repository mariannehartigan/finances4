<?php

namespace App\Policies;

use App\Models\Income;
use App\Models\User;
/*not sure if HandlesAuthorization is needed*/
use Illuminate\Auth\Access\HandlesAuthorization;
use Illuminate\Auth\Access\Response;

class IncomePolicy
{
    use HandlesAuthorization;
    public function viewAny(User $user): bool
    {
        return true;
    }

    public function view(User $user, Income $income): bool
    {
        return true;
        /*return $user->id === $income->user_id;*/
    }

    public function create(User $user): bool
    {
        return $user->is_admin === 1;
    }

    public function update(User $user, Income $income): bool
    {
        return $user->is_admin === 1;
    }

    public function delete(User $user, Income $income): bool
    {
        return $user->is_admin === 1;
    }

    public function restore(User $user, Income $income): bool
    {
        return true;
    }

    public function forceDelete(User $user, Income $income): bool
    {
        return true;
    }
}

