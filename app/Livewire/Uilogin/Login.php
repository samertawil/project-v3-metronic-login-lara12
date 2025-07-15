<?php


namespace App\Livewire\Uilogin;

use App\Models\User;
use Livewire\Component;
use Livewire\Attributes\Validate;
use Illuminate\Support\Facades\Auth;

class Login extends Component
{

    public $email;
    #[Validate(['required'])]
    public $password;
    public $remember = false;
    #[Validate(['required'])]
    public $user_name;

    
 
    public function authenticate()
    {
       
         $this->validate();

        $user = User::user($this->user_name);

        if(!$user) {
          
            $this->addError('user_name',  __('auth.failed'));

            return;
        }

        if ($user->user_activation != 1) {

            $this->addError('user_name',  __('customTrans.deactivated account'));

            return;
        }

        if ($user->need_to_change == 1) {
           
            return redirect()->route('password.change', ['userId' => $user->user_name]);
        }

        if (!Auth::guard('web')->attempt(['user_name' => $this->user_name, 'password' => $this->password], $this->remember)) {

            $this->addError('user_name', trans('auth.failed'));

            return;
        }

        return redirect()->intended(route(config('uilogin.redirectToAdmin')));
 
    }

 
   
    public function render()
    {
        if (Auth::guard('web')->user()) {
            
            return view(config('uilogin.redirectToView'))->layout('components.layouts.metronic7-simple-app');   
 
        }
    
        $title=__('customTrans.login_system');
        
        return view('livewire.ui_auth.login')->layoutData(['title'=>$title])->layout('components.layouts.uilogin-admin-app');
    }
}
