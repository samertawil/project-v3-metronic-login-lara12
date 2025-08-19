<div>


    <div class="row justify-content-between align-items-center">

        <x-input wire:model='card_title' name='card_title' label divWidth="4"></x-input>

        <x-input wire:model='card_text' name='card_text' label divWidth="8"></x-input>

        <x-input wire:model='card_url' name='card_url' label divWidth="4"></x-input>

        <x-radio label wire:model='active' name="activation" value1="1" value2="0" value_title1="active"
            value_title2="deactivated" divWidth='2' divclass="mx-5"></x-radio>

        <x-select wire:model='card_use_in' name='card_use_in'   :labelname="__('customTrans.card_use_in')" label :options="$this->statuses->pluck('status_name','id')"> </x-select>

        <x-input type="date" wire:model='publish_date' name='publish_date'   label divWidth='3'></x-input>

    </div>

    <x-filepond::upload wire:model="card_img" name="card_img" required='true' allowFileSizeValidation maxFileSize='7024KB'
        class="@error('card_img') is-invalid   @enderror" />
        @include('partials.general._show-error',['field_name'=>'card_img'])
  
 

    <x-saveClearbuttons close wire:click.prevent='store'></x-saveClearbuttons> 
    @include('layouts._show_errors_all')

</div>
