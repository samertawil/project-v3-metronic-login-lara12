<?php

namespace  App\Livewire\Dashboard\UserModule ;

use Livewire\Component;
use Illuminate\Support\Facades\Gate;


class UserCreate extends Component
{

    public $name = '';
    public $user_name = '';
    public $mobile = '';
    public $email = '';
    public $password = '';
    public $passwordConfirmation = '';
    public $year = '';
    public $month = '';
    public $day = '';


    
 
    public function render()
    {
        if(Gate::denies('user.all.resource')) {
            abort(403,__('customTrans.you have no access'));
         }

       $pageTitle=__('customTrans.users');
        
        return view('livewire.dashboard.users.user-create')->layoutData(['pageTitle'=>$pageTitle,'Title'=>$pageTitle]);
    }
}
