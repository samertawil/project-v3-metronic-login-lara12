<?php

namespace App\Livewire\Uilogin;

 
use App\Models\User;
use Livewire\Component;
use Livewire\Attributes\Rule;
use Livewire\Attributes\Title;
use Livewire\Attributes\Layout;
use Livewire\Attributes\Validate;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class ChangePassword extends Component
{
    #[Validate(['required'])]
    #[Validate('exists:users,user_name',message:'خطأ باسم المستخدم')]
    public $user_name;
 

    #[Validate(['required'])]
    public $currentPassword;

    #[Validate(['required','min:4'])]
    public $password;

    #[Validate(['same:password'])]
    #[Validate('required_with:password')]
    public $passwordConfirmation;

    public function resetPassword() {
      
        $this->validate();
      
        $user = User::where('user_name', $this->user_name)->first();
        
      
        if (Auth::attempt(['user_name' => $this->user_name, 'password' => $this->password])) {
            
            $this->addError('password', __('customTrans.same old password'));
       
            return;

        } 

            
        if (!Auth::attempt(['user_name' => $this->user_name, 'password' => $this->currentPassword])) {
            
            $this->addError('currentPassword', trans('auth.password'));
       
            return;

        } 

    
        $user->update([
            'password'=>Hash::make($this->password),
            'need_to_change'=>0,
        ]);

        session()->flash('message',__('customTrans.success updated'));
             return redirect()->intended(route('dashboard.home'));

       

    }
    

 
   #[Layout('components.layouts.uilogin-app')]
    public function render()
    {
        $pageTitle=__('customTrans.renewPassword');
        $title=__('customTrans.renewPassword');
        return view('livewire.ui_auth.change-password')->layoutData(['pageTitle'=>$pageTitle,'title'=>$title]);
    }
}
