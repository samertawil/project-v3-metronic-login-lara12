<?php

namespace App\Livewire\Dashboard\Setting;

use App\Models\Setting;
use Livewire\Component;
use App\Traits\FlashMsgTraits;
use Illuminate\View\View;
use Livewire\Attributes\Layout;
use Livewire\Attributes\Validate;


class SettingCreate extends Component
{

    #[Validate(['required','unique:settings,key'])]
    public string $key;
    #[Validate(['required'])]
    public mixed $value;
    public string $description;
    public string $notes;
    public string $moduleName;
  

    public function store(): void {
 
   
       $this->validate();
 
   
        Setting::create([
            'key'=>$this->key,
            'value'=>$this->value,
            'description'=>$this->description,
            'notes'=>$this->notes,
           
        ]);

        FlashMsgTraits::created(); 
        $this->reset();
    }

    #[Layout('components.layouts.metronic7-simple-app')]
    public function render(): View
    {
        $pageTitle= __('customTrans.setting')  ; 

        $settings=Setting::get();

        return view('livewire.dashboard.setting.setting-create',compact('settings'))->layoutData(['pageTitle'=>$pageTitle,'Title'=>$pageTitle]);
    }
}
