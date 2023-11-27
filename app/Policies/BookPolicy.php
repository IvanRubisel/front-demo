<?php

namespace App\Policies;

use Illuminate\Auth\Access\HandlesAuthorization;
use App\Models\Book;
use App\Models\User;

class BookPolicy
{
    use HandlesAuthorization;

    public function viewAny(User $user)
    {
        return true;
    }

    public function view(User $user, Book $book)
    {
        return true;
    }

    public function create(User $user)
    {
        return true;
    }

    public function update(User $user, Book $book)
    {
        return true;
    }

    public function delete(User $user, Book $book)
    {
        return true;
    }

    public function restore(User $user, Book $book)
    {
        return true;
    }

    public function forceDelete(User $user, Book $book)
    {
        return true;
    }
}
