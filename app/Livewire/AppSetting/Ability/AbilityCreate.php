<?php

namespace App\Livewire\AppSetting\Ability;


use App\Models\Ability;
use Livewire\Component;
use App\Models\ModuleName;
use Illuminate\Database\Eloquent\Collection;
use Livewire\Attributes\Computed;
use Livewire\Attributes\Validate;
use Illuminate\Support\Facades\Gate;
use Illuminate\View\View;

class AbilityCreate extends Component
{

    #[Validate(['required', 'string', 'unique:abilities,ability_name'])]
    public string $ability_name;
    #[Validate(['required', 'string', 'unique:abilities,ability_description'])]
    public string $ability_description;
    public int $module_id;
    public string $url;
    public string $description;

    public function storeAbility(): void
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
    public function ModuleNames(): Collection {
        return ModuleName::get();
        
    }

    public function render(): View
    {

        if(Gate::denies('ability.all.resource')) {
            abort(403,'ليس لديك الصلاحية اللازمة');
         }

        // $moduleNames=CacheStatusModelServices::getData()->where('p_id_sub',1121);

        $pageTitle = __('customTrans.create ability');

        return view('livewire.app-setting.ability.ability-create')->title($pageTitle);
    }
}
