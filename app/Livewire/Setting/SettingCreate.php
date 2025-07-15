<?php

namespace App\Livewire\Setting;

use App\Models\Setting;
use Livewire\Component;
use App\Traits\FlashMsgTraits;
use Livewire\Attributes\Title;
use Livewire\Attributes\Layout;
use Livewire\Attributes\Validate;


class SettingCreate extends Component
{

    #[Validate(['required','unique:settings,key'])]
    public $key;
    #[Validate(['required'])]
    public $value;
    public $description;
    public $notes;
    public $moduleName;
  

    public function store() {
 
   
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
    public function render()
    {
        $pageTitle= __('customTrans.setting')  ; 

        $settings=Setting::get();

        return view('livewire.setting.setting-create',compact('settings'))->layoutData(['pageTitle'=>$pageTitle,'Title'=>$pageTitle]);
    }
}
