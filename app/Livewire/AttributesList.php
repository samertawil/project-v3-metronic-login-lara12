<?php

namespace App\Livewire;

use App\Models\Status;
use Livewire\Component;
use App\Models\CitzenServices;

class AttributesList extends Component
{

    public $all_templates = [];
    public $attributeColumn = [];   // dropdown value
    public $attributeValue = [''];
    public $x1;


    // public function SelectFileType($value)
    // {
       
    //     if($value=='card top header') {
    //         $this->FileType='file';
    //     } else {
    //         $this->FileType='text';
    //     }
    // }

    public function mount()
    {

        $this->all_templates = Status::where('p_id_sub', config('attributesConst.p_sub_id'))->get();

        
    }

    public   function store()
    {
 
 
        foreach ($this->attributeColumn as $key => $value) {

            $this->x1[$value] =  $this->attributeValue[$key];
        }

        $this->dispatch('citzen-services-properties', [
            'proparty' => $this->x1,
        ]);

        $this->dispatch('closeModel');
    }




    public function addQuestion()
    {
        $this->attributeValue[] = '';
    }


    public function removeQuestion($index)
    {
        unset($this->attributeValue[$index]);
        $this->attributeValue = array_values($this->attributeValue);
    }

 
    public function render()
    {
        return <<<'HTML'
            <div>
                <div>
               
 
        <div class="pr-3" name="properties" id="properties">

            @foreach ($attributeValue as $index => $question)
                <div class=" row align-items-center">

                    <Select @class(['form-control  w-25']) wire:model='attributeColumn.{{ $index }}'>
                        <option value="">اختار اعمدة</option>

                        @foreach ($all_templates ?? [] as $template1)
                            <option value="{{ $template1->status_name }}">
                                {{ $template1->status_name }}
                            </option>
                        @endforeach
                    </Select>


                    <x-input wire:model="attributeValue.{{ $index }}" name="attributeValue{{ $index }}"
                        divWidth="4"  marginBottom="0"></x-input>

                    <x-actions mins wire:click.prevent='removeQuestion({{ $index }})'></x-actions>

                </div>
            @endforeach

        </div>



        <x-actions plus wire:click.prevent='addQuestion'></x-actions>

        
        
  

        <x-button wire:click.prevent='store' label="save and back"></x-button>
 

        <p> {{ __('customTrans.add new colums') }} <span><a href="{{ route('status') }}"
                    target="_blank">{{ __('customTrans.here') }} </a> </span></p>
 
              

                </div>


            </div>
        HTML;
    }
}






