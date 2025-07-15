<?php

namespace App\Livewire\Role;

use App\Models\Role;
use App\Models\Ability;
use Livewire\Component;
use Livewire\Attributes\Title;
use App\Http\Requests\RoleRequest;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Gate;

class RoleEdit extends Component
{


    public $name;
    public $abilitiesId = [];
    public $roles;
    public $abilities1;


    public function update()
    {

        // if(Gate::denies('role.update')) {
        //     abort(403,'ليس لديك الصلاحية اللازمة');
        //  }

        $role = Role::findOrfail($this->roles['id']);

        foreach($this->abilitiesId as $ability_name)
        {
            $ability=Ability::select('ability_description','ability_name')->where('ability_name',$ability_name)->first();
            $array[] = $ability->ability_description??null;
            $array2[]=$ability->ability_name??null;
           
        }
         


        // $this->validate(RoleRequest::rules($this->roles['id']));

        $new = $role->update([
            'name' => $this->name,
            'abilities' => $array2,
            'abilities_description'=> $array,
            'created_by' => Auth::id(),
        ]);

       

        redirect()->route('role.index');
    }

    public function mount($id = '')
    {
        $data = Role::find($id);


        $this->roles = $data;
        $this->name = $data->name ?? '';

        if ($id) {
            $this->abilitiesId = $data->abilities ?? '';
        }
    }



    public function render()
    { 

        if (Gate::denies('abilities.groups.all.resource')) {
            abort(403, 'ليس لديك الصلاحية اللازمة');
        }


        $pageTitle = __('customTrans.edit role');
        $abilities_module = Ability::select('module_id')->groupby('module_id')->get();

        $abilities = Ability::select('id', 'module_id', 'ability_description', 'ability_name', 'activation')->with('modulename')->withoutGlobalScope('not-active')->get();



        return view('livewire.role.role-edit', compact('abilities_module', 'abilities'))->layoutData(['pageTitle'=>$pageTitle,'title'=>$pageTitle]);;
       
     
    }
}
