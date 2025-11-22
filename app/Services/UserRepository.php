<?php

namespace App\Services;

 
use App\Models\User;
use Illuminate\Support\Facades\Hash;

class UserRepository
{

   
    public static function registerNewUsers(array  $data): User
    {
       return User::create([
            'user_name' => $data['user_name'],
            'name' => $data['name'],
            'mobile' => $data['mobile'],
            'email' => $data['email'],
            'password' => Hash::make($data['password']),

        ]);
    }

    public static function showUser(string $user_name): ?User {
        return   User::firstWhere('user_name', $user_name);
     }
}
