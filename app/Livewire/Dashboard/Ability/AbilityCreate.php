<?php

namespace App\Livewire\Dashboard\Ability;


use App\Models\Ability;
use Livewire\Component;
use App\Models\ModuleName;
use Livewire\Attributes\Computed;
use Livewire\Attributes\Validate;
use Illuminate\Support\Facades\Gate;
use Illuminate\View\View;

class AbilityCreate extends Component
{

    #[Validate(['required', 'string', 'unique:abilities,ability_name'])]
    public $ability_name;

    #[Validate(['required', 'string', 'unique:abilities,ability_description'])]
    public $ability_description;

    public $module_id;

    public $url;

  

    public $description;

    public function storeAbility()
    {
 
       

        $this->validate();

        Ability::create([
            'ability_name' => $this->ability_name,
            'ability_description' => $this->ability_description,
            'module_id' => $this->module_id,
            'url' => $this->url,
            
            'description' => $this->description,
        ]);

        $this->dispatch('closeModel');
        $this->dispatch('Refresh_Ability_Index');


        $this->reset('ability_name', 'ability_description', 'module_id', 'url',  'description');
    }

    #[Computed]
    public function ModuleNames() {
        return ModuleName::get();
        
    }

    public function render(): View
    {

        if(Gate::denies('ability.all.resource')) {
            abort(403,'ليس لديك الصلاحية اللازمة');
         }

        // $moduleNames=CacheStatusModelServices::getData()->where('p_id_sub',1121);

        $pageTitle = __('customTrans.create ability');

        return view('livewire.dashboard.ability.ability-create')->title($pageTitle);
    }
}
