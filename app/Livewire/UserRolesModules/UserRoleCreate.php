<?php

namespace App\Livewire\UserRolesModules;

use App\Models\Role;
use App\Models\User;
use Livewire\Component;
use App\Models\RoleUser;
use Livewire\Attributes\Title;
use Illuminate\Support\Facades\Auth;
use App\Services\FlashMsg;
 

class UserRoleCreate extends Component
{

  public $granted_groups;
  public $userID;
  public $user_name;
  public $rolesId = [];
  public $exist1;


  public function mount($userID)
  {

    $data = RoleUser::select('role_id')->where('user_id', $userID)->get();

    $user = User::find($userID);

    $this->user_name =  $user->user_name;



    $role = [];
    foreach ($data as $myRole) {
      $role[] = $myRole->role_id;
    }

    $this->rolesId = $role;
  }

  public function store()
  {


    if (!empty($this->rolesId)) {

      foreach ($this->rolesId as $role) {

        RoleUser::upsert([
          [
            'user_id' => $this->userID,
            'role_id' => $role,
            'granted_by' => Auth::id()
          ],
        ], uniqueBy: ['user_id', 'role_id'],);
      }
    }


    if (empty($this->rolesId)) {
      
      $data = RoleUser::where('user_id', $this->userID);
      $data->Delete();
    } else {
     
      $data = RoleUser::wherenotin('role_id', $this->rolesId)->where('user_id', $this->userID);
      $data->Delete();
    }

    $this->redirectRoute('dashboard.user.index');
  }



 
  public function render()
  {
    $pageTitle= __('customTrans.user role');
  
    $roles_group = Role::get();

    return view('livewire.user-roles.user-role-create', compact('roles_group'))->layoutData(['pageTitle'=>$pageTitle,'title'=> $pageTitle]);
  }
}
