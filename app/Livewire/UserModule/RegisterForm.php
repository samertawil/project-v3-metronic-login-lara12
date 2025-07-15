<?php

namespace  App\Livewire\UserModule ;

 use App\Models\User; 
use Livewire\Component;
use Livewire\Attributes\Validate;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Gate;
use Illuminate\Support\Facades\Hash;

class RegisterForm extends Component
{

    #[Validate(['required'])]
    public $name = '';

    #[Validate(['required', 'unique:users,user_name', 'min:3', 'max:35'])]
    public $user_name = '';

     #[Validate(['required', 'numeric', 'min_digits:10', 'max_digits:15', 'unique:users,mobile'])]
    public $mobile = '';
	#[Validate(['nullable', 'email'])]
    public $email = '';

    #[Validate(['required', 'min:4', 'same:passwordConfirmation'])]
    public $password = '';

    public $passwordConfirmation = '';
     
 

    
    public function register()
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


  

    public function render()
    {
        if(Gate::denies('user.all.resource')) {
            abort(403,__('customTrans.you have no access'));
         }
         
        return view('livewire.users.register-form');
       
    }
}
