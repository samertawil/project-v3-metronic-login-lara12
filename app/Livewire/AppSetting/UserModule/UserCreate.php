<?php

namespace  App\Livewire\AppSetting\UserModule ;

use Livewire\Component;
use Illuminate\Support\Facades\Gate;
use Illuminate\View\View;

class UserCreate extends Component
{

    public string $name = '';
    public string $user_name = '';
    public string $mobile = '';
    public string $email = '';
    public string $password = '';
    public string $passwordConfirmation = '';
    public int $year;
    public int $month;
    public int $day;


    
 
    public function render(): View
    {
        if(Gate::denies('user.all.resource')) {
            abort(403,__('customTrans.you have no access'));
         }

       $pageTitle=__('customTrans.users');
        
        return view('livewire.app-setting.users.user-create')->layoutData(['pageTitle'=>$pageTitle,'Title'=>$pageTitle]);
    }
}
