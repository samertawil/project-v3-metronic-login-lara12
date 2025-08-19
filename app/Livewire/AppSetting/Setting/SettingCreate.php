<?php

namespace App\Livewire\AppSetting\Setting;

use App\Models\Setting;
use Livewire\Component;
use App\Traits\FlashMsgTraits;
use Illuminate\View\View;
use Livewire\Attributes\Layout;
use Livewire\Attributes\Validate;


class SettingCreate extends Component
{

    #[Validate(['required', 'unique:settings,key'])]
    public string $key;
    #[Validate(['required'])]
    public mixed $value=0;
    public string $description='';
    public string $notes='';
    public string $moduleName;

    public mixed $value_array=[];
    public mixed $all_templates_attchments = [];
    public mixed $attributeValue_attchments = [''];



    public function store(): void
    {
        $this->validate();
        
        (array) $data=[];

        if (! empty($this->attributeValue_attchments[0])) {

            foreach ($this->attributeValue_attchments as $key => $value) {
               
                 $data[]=$value;
                
            }
            Setting::create([
                'key' => $this->key,
                'value' => $this->value,
                'value_array' => $data,
                'description' => $this->description,
                'notes' => $this->notes,

            ]);
        } else {
            Setting::create([
                'key' => $this->key,
                'value' => $this->value,
                'description' => $this->description,
                'notes' => $this->notes,

            ]);
        }

      




        FlashMsgTraits::created();
        $this->reset();
    }



    public function addQuestion(): void
    {
         // @phpstan-ignore-next-line
        $this->attributeValue[] = '';
    }



    public function addQuestion_attchments(): void
    {
       
        $this->attributeValue_attchments[] = '';
    }

    public function removeQuestion_attchments(int $index): void
    {
        unset($this->attributeValue_attchments[$index]);
        $this->attributeValue_attchments = array_values($this->attributeValue_attchments);
    }



    #[Layout('components.layouts.metronic7-simple-app')]
    public function render(): View
    {
        $pageTitle = __('customTrans.setting');

        $settings = Setting::get();

        return view('livewire.app-setting.setting.setting-create', compact('settings'))->layoutData(['pageTitle' => $pageTitle, 'Title' => $pageTitle]);
    }
}
