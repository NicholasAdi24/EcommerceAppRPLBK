<?php

namespace App\Services;

use App\User;
use Hash;

class PasswordService
{
    public function updatePassword($userId, $newPassword)
    {
        return User::find($userId)->update(['password' => Hash::make($newPassword)]);
    }
}
