<?php

namespace App\Livewire\Dashboard\StatusModule;


use Livewire\Component;
use App\Models\SettingSystem;
use App\Traits\FlashMsgTraits;
 use Livewire\Attributes\Validate;
use Illuminate\Support\Facades\Gate;
use App\Services\CacheSystemSettingServices;


class SystemClass extends Component
{
 
    public $description='';
    public $systems_data=[];

    #[Validate(['required','unique:setting_systems,system_name'])]
    public $system_name;




    public function systemStore()
    {

        $this->validate();

        SettingSystem::create([
            'system_name' => $this->system_name,
            'description' => $this->description,
        ]);


        FlashMsgTraits::created(); 
        $this->dispatch('new-system-addes');
        $this->reset();
    }

 
    public  function mount() {
      $this->systems_data= CacheSystemSettingServices::getData() ;
    }

    public function render()
    {
        if (Gate::denies('status_view')) {
            abort(403,'ليس لديك الصلاحية اللازمة');;
        }
        return view('livewire.dashboard.status.system');
    }



    
}


