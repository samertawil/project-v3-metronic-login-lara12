<?php


namespace App\Livewire\Login;

use Livewire\Component;
use Illuminate\View\View;
use Livewire\Attributes\Validate;
use Illuminate\Support\Facades\Auth;


class Login extends Component
{

    #[Validate(['required'])]
    public string $password = '';
    public bool $remember = false;
    #[Validate(['required'])]
    public string $user_name;



    public function authenticate(): mixed
    {

        $this->validate();

        $credentials = ['user_name' => $this->user_name, 'password' => $this->password];

        if (!Auth::guard('web')->attempt($credentials, $this->remember)) {
            $this->addError('user_name', trans('auth.failed'));
            return null;
        }

        /** @var \App\Models\User $user */
        $user = Auth::guard('web')->user();

        if ($user->user_activation != 1) {
            Auth::guard('web')->logout();
            $this->addError('user_name',  __('customTrans.deactivated account'));
            return null;
        }

        if ($user->need_to_change == 1) {

            return redirect()->route('password.change', ['userId' => $user->user_name]);
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

        return view('livewire.login.login')->layoutData(['title' => $title])->layout('components.layouts.uilogin-admin-app');
    }
}
