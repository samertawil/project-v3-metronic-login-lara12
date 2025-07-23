<?php

namespace App\Livewire\Dashboard\RoleModuleName;

use Livewire\Component;
use App\Enums\activeType;
use App\Models\ModuleName;
use App\Traits\FlashMsgTraits;
use Illuminate\Validation\Rule;
use Illuminate\Support\Facades\Gate;


class Create extends Component
{


    public $name;
    public $description;
    public $active="1" ;
 
    public function rules() {
        return [
            'name'=>['required','unique:module_names,name','string'],
            'active'=>['required', Rule::enum(activeType::class)],
        ];
    }

    public function store() {
       
        $this->validate();
       
        ModuleName::create([
            'name'=>$this->name,
            'description'=>$this->description,
            'active'=>$this->active,
        ]);
 
        FlashMsgTraits::created();
        $this->dispatch('reload-module');
        $this->reset();

    }

    
    public function render()
    {

        
        if(Gate::denies('ability.all.resource')) {
            abort(403,'ليس لديك الصلاحية اللازمة');
         }


         
        $title=__('customTrans.module_id');
        
        return view('livewire.dashboard.role-module-name.create')->layoutData(['title'=>$title,'pageTitle'=>$title]);
    }
}
