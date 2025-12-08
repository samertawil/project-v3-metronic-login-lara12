<?php

namespace App\Livewire;


use App\Models\User;
use Livewire\Component;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Laravel\Socialite\Facades\Socialite;

class SocialLogin extends Component
{


    public function socialRedirect($provider)
    {

        return Socialite::driver($provider)->redirect();
    }

    public function socialCallback($provider)
    {

        $user =  Socialite::driver($provider)->user();
       

        if ($user) {

            $existUser = User::firstWhere('email', $user->email);

            if (!$existUser) {
                $newUser = User::create([
                    'name' => $user->name,
                    'user_name' => $user->email,
                    'email' => $user->email,
                    'password' => Hash::make(rand(100000, 10000000)),
                    'google_ID' => $user->id,

                ]);
                Auth::loginUsingId($newUser->id);
            } else {
                Auth::loginUsingId($existUser->id);
            }


            return redirect()->intended(route(config('uilogin.redirectToAdmin')));
        }
    }


    
}
