<?php

namespace App\Livewire\Uilogin;

use Livewire\Component;
use Illuminate\Support\Facades\Password;
use Illuminate\Support\Facades\Hash;



class ResetPassword extends Component
{
    public $email;
    public $token;
    public $password;
    public $password_confirmation;
    public $status;
    public $error;

    protected $rules = [
        'email' => 'required|email|exists:users,email',
        'password' => 'required|min:4|confirmed',
    ];

    public function mount($token)
    {
        $this->token = $token;
        $this->email = request()->query('email');
    }

    public function resetPassword()
    {
        $this->validate();

        $status = Password::reset(
            [
                'email' => $this->email,
                'password' => $this->password,
                'password_confirmation' => $this->password_confirmation,
                'token' => $this->token,
            ],
            function ($user, $password) {
                $user->password = Hash::make($password);
                $user->save();
            }
        );

        if ($status == Password::PASSWORD_RESET) {
            $this->status = __('تم تغيير كلمة المرور بنجاح.');
        } else {
            $this->error = __($status);
        }
    }

    

    public function render()
    {
        return view('livewire.ui_auth.reset-password');
    }
}
