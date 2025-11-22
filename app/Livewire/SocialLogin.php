<?php

namespace App\Livewire;

 
use Livewire\Component;
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
      //  dd($user->user['email']);

    }
    

    public function render()
    {
        return view('livewire.social-login')->layout('components.layouts.uilogin-admin-app');;
    }
}
