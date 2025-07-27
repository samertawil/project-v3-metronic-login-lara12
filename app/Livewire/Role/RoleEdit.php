<?php

namespace App\Livewire\Role;

use App\Models\Role;
use App\Models\Ability;
use Livewire\Component;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Gate;
use Illuminate\View\View;

class RoleEdit extends Component
{


    public string $name;
    public mixed $abilitiesId = [];
    public mixed $roles;
 


    public function update(): void
    {

    

        $abilitiesDescription=[];
        $abilities=[];

        foreach($this->abilitiesId as $ability_name)
        {
            $ability=Ability::select('ability_description','ability_name')->where('ability_name',$ability_name)->first();
            $abilitiesDescription[] = $ability->ability_description??null;
            $abilities[]=$ability->ability_name??null;
           
        }
      
        // $this->validate(RoleRequest::rules($this->roles['id']));
        Role::where('id',$this->roles['id'])->
           update([
            'name' => $this->name,
            'abilities' => $abilities,
            'abilities_description'=> $abilitiesDescription,
            'created_by' => Auth::id(),
        ]);
     
       

        redirect()->route('role.index');
    }

    public function mount(mixed $id = ''): void
    {
        $data = Role::find($id);


        $this->roles = $data;
        $this->name = $data->name ?? '';

        if ($id) {
            $this->abilitiesId = $data->abilities ?? '';
        }
    }



    public function render(): View
    { 

        if (Gate::denies('abilities.groups.all.resource')) {
            abort(403, 'ليس لديك الصلاحية اللازمة');
        }


        $pageTitle = __('customTrans.edit role');
        $abilities_module = Ability::select('module_id')->groupby('module_id')->get();

        $abilities = Ability::select('id', 'module_id', 'ability_description', 'ability_name', 'activation')->with('module_name')->withoutGlobalScope('not-active')->get();



        return view('livewire.role.role-edit', compact('abilities_module', 'abilities'))->layoutData(['pageTitle'=>$pageTitle,'title'=>$pageTitle]);;
       
     
    }
}
