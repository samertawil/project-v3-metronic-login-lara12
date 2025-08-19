<?php

namespace App\Livewire\Login;

use Livewire\Component;
use Illuminate\View\View;
use Livewire\Attributes\Layout;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Password;

class ResetPassword extends Component
{
    public string  $email;
    public string  $token;
    public string  $password;
    public string  $password_confirmation;
    public string  $status;
    public ?string  $error;

    /**
     * @var array<string, string|string[]>
     */
    protected array $rules = [
        'email' => 'required|email|exists:users,email',
        'password' => 'required|min:4|confirmed',
    ];

    public function mount(string $token): void
    {
        $this->token = $token;
        $this->email = request()->query('email');
    }

    public function resetPassword(): mixed
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


            return redirect()->intended(route('dashboard.home'));
        } else {
            return  $this->error = __($status);
        }
    }


    #[Layout('components.layouts.uilogin-admin-app')]
    public function render(): View
    {
        $title = __('customTrans.reset password');
        return view('livewire.login.reset-password')->layoutData(['title' => $title]);
    }
}
