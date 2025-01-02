<?php

namespace App\Policies;

use App\Models\User\User;

class UserPolicy
{
    public function viewAny(User $user): bool
    {
        return $user->can('view users');
    }

    public function create(User $user): bool
    {
        return $user->can('create users');
    }

    public function update(User $user): bool
    {
        return $user->can('edit users');
    }

    public function delete(User $user): bool
    {
        return $user->can('delete users');
    }
}
