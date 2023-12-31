<?php

namespace App\Policies;

use Illuminate\Auth\Access\HandlesAuthorization;
use App\Models\Author;
use App\Models\User;

class AuthorPolicy
{
    use HandlesAuthorization;

    public function viewAny(User $user)
    {
        return true;
    }

    public function view(User $user, Author $author)
    {
        return true;
    }

    public function create(User $user)
    {
        return true;
    }

    public function update(User $user, Author $author)
    {
        return true;
    }

    public function delete(User $user, Author $author)
    {
        return true;
    }

    public function restore(User $user, Author $author)
    {
        return true;
    }

    public function forceDelete(User $user, Author $author)
    {
        return true;
    }
}
