<?php


namespace App\Livewire\Uilogin;

use App\Models\User;
use Livewire\Component;
use Livewire\Attributes\Validate;
use Illuminate\Support\Facades\Auth;
use Illuminate\View\View;

class Login extends Component
{

    public string $email;
    #[Validate(['required'])]
    public string $password;
    public bool $remember = false;
    #[Validate(['required'])]
    public string $user_name;



    public function authenticate(): mixed
    {

        $this->validate();

        $user = User::user($this->user_name);

        if (!$user) {

            $this->addError('user_name',  __('auth.failed'));

            return '';
        }

        if ($user->user_activation != 1) {

            $this->addError('user_name',  __('customTrans.deactivated account'));

            return '';
        }

        if ($user->need_to_change == 1) {

            return redirect()->route('password.change', ['userId' => $user->user_name]);
        }

        if (!Auth::guard('web')->attempt(['user_name' => $this->user_name, 'password' => $this->password], $this->remember)) {

            $this->addError('user_name', trans('auth.failed'));

            return '';
        }

        return redirect()->intended(route(config('uilogin.redirectToAdmin')));
    }



    public function render(): View
    {
        $title = __('customTrans.login_system');

        if (Auth::guard('web')->user()) {

            /** @var \Illuminate\View\View&\App\ViewMacros\HasLayoutData $view */
            $view = view(config('uilogin.redirectToView'));

            return $view->layoutData(['title' => $title])->layout('components.layouts.metronic7-simple-app');
        }

        return view('livewire.ui_auth.login')->layoutData(['title' => $title])->layout('components.layouts.uilogin-admin-app');
    }
}
