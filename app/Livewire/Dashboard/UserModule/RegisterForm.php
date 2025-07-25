<?php

namespace  App\Livewire\Dashboard\UserModule ;

 use App\Models\User; 
use Livewire\Component;
use Livewire\Attributes\Validate;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Gate;
use Illuminate\Support\Facades\Hash;
use Illuminate\View\View;

class RegisterForm extends Component
{

    #[Validate(['required'])]
    public  string $name = '';
    #[Validate(['required', 'unique:users,user_name', 'min:3', 'max:35'])]
    public mixed $user_name = '';
     #[Validate(['required', 'numeric', 'min_digits:10', 'max_digits:15', 'unique:users,mobile'])]
    public string $mobile = '';
	#[Validate(['nullable', 'email'])]
    public string $email = '';
    #[Validate(['required', 'min:4', 'same:passwordConfirmation'])]
    public string $password = '';
    public string $passwordConfirmation = '';
    
    
    public function register(): void
    {
       
          $this->validate();

             $user = User::create([
            'user_name' => $this->user_name,
            'name' => $this->name,
			'email'=>$this->email,
            'mobile' => $this->mobile,
            'created_by'=>Auth::user()->id,
            'password' => Hash::make($this->password),
            'need_to_change'=>1,

        ]);


     
        $this->dispatch('closeModel');
      
        $this->reset(['user_name','name','mobile','password' ,'passwordConfirmation','email']);
    }


  

    public function render(): View
    {
        if(Gate::denies('user.all.resource')) {
            abort(403,__('customTrans.you have no access'));
         }
         
        return view('livewire.dashboard.users.register-form');
       
    }
}
