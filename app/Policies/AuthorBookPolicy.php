<?php

namespace App\Policies;

use Illuminate\Auth\Access\HandlesAuthorization;
use App\Models\AuthorBook;
use App\Models\User;

class AuthorBookPolicy
{
    use HandlesAuthorization;

    public function viewAny(User $user)
    {
        return true;
    }

    public function view(User $user, AuthorBook $authorBook)
    {
        return true;
    }

    public function create(User $user)
    {
        return true;
    }

    public function update(User $user, AuthorBook $authorBook)
    {
        return true;
    }

    public function delete(User $user, AuthorBook $authorBook)
    {
        return true;
    }

    public function restore(User $user, AuthorBook $authorBook)
    {
        return true;
    }

    public function forceDelete(User $user, AuthorBook $authorBook)
    {
        return true;
    }
}
