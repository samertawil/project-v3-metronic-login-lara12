<?php

namespace App\Livewire\Ability;


use App\Models\Ability;
use Livewire\Component;
use Illuminate\Support\Facades\Gate;
use App\Http\Requests\AbilityRequest;
use App\Services\CacheStatusModelServices;


class AbilityCreate extends Component
{
    public $ability_name; 
    public $ability_description; 
    public $module_id; 
    public $url; 
    public $activation; 
    public $description; 


    public function storeAbility() {

        if(Gate::denies('ability.create')) {
            abort(403,'ليس لديك الصلاحية اللازمة');
         }

     $this->validate(AbilityRequest::rules());

        Ability::create([
            'ability_name'=>$this->ability_name,
            'ability_description'=>$this->ability_description,
            'module_id'=>$this->module_id,
            'url'=>$this->url,
            'activation'=>$this->activation,
            'description'=>$this->description,
        ]);

         $this->dispatch('closeModel');
         $this->dispatch('Refresh_Ability_Index');
      
        
        $this->reset('ability_name','ability_description','module_id','url','activation','description');

      

    }

    
    public function render()
    {
 
      
        $moduleNames=CacheStatusModelServices::getData()->where('p_id_sub',1121);
        
        $pageTitle='انشاء صلاحية';
        
        return view('livewire.ability.ability-create',compact('moduleNames'))->title( $pageTitle);
    }


}
