<?php

namespace App\Services;

use App\Models\User;
use Illuminate\Support\Facades\Auth;

class UserService
{
    public function store(array $new_user_data): User
    {
        $user = User::create($new_user_data);
        return $user;
    }

    public function update($user, $new_user_data): void
    {
        $user->update($new_user_data);
    }

    public static function isUserAdmin()
    {
        $user = Auth::user();
        return $user->role === 'admin';
    }
}
