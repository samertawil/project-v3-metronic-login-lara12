<?php

namespace App\Livewire\Role;

use App\Models\Role;
use App\Models\Ability;
use Livewire\Component;
use App\Http\Requests\RoleRequest;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Gate;

class RoleCreate extends Component
{


    public $name;

    public $abilitiesId = [];
    public $roles;
    public $abilities1;



    public function placeholder()
    {
        return view('livewire.placeholder');
    }

    public function store()
    {

        $abilitiesDescription=[];
        $abilities=[];

        foreach ($this->abilitiesId as $ability_name) {

            $ability = Ability::select('ability_description', 'ability_name')->where('ability_name', $ability_name)->first();

            $abilitiesDescription[] = $ability->ability_description ?? '';
            $abilities[] = $ability->ability_name ?? null;
        }

        //  dd(  $array2,$array, $this->abilitiesId);


        // $this->validate(RoleRequest::rules());

        Role::create([
            'name' => $this->name,
            'abilities' => $abilities,
            'abilities_description' => $abilitiesDescription,
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


        $pageTitle = __('customTrans.create new role');


        $abilities_module = Ability::with('module_name')->select('module_id')->groupby('module_id')->get();

        $abilities = Ability::select('id', 'module_id', 'ability_description', 'ability_name', 'activation')->with('module_name')->withoutGlobalScope('not-active')->get();


        return view('livewire.role.role-create', compact('abilities_module', 'abilities'))->layoutData(['pageTitle' => $pageTitle, 'title' => $pageTitle]);
    }
}
