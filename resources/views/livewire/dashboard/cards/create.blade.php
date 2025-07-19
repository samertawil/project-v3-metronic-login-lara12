<div>


    <div class="row justify-content-between align-items-center">

        <x-input wire:model='card_title' name='card_title' label divWidth="4"></x-input>

        <x-input wire:model='card_text' name='card_text' label divWidth="8"></x-input>

        <x-input wire:model='card_url' name='card_url' label divWidth="4"></x-input>

        <x-radio label wire:model='active' name="activation" value1="1" value2="0" value_title1="active"
            value_title2="deactivated" divWidth='2' divclass="mx-5"></x-radio>

        <x-select wire:model='status_id' name='status_id' label :options="$this->status->pluck('status_name','id')"> </x-select>

    </div>

    <x-filepond::upload wire:model="file" name="file" required='true' allowFileSizeValidation maxFileSize='1024KB'
        class="@error('file') is-invalid   @enderror" />
        @include('partials.general._show-error',['field_name'=>'file'])
  
 


    <div class="modal-footer " style="border-top:none;">

        <x-button default_class="btn ripple btn-secondary" data-dismiss="modal" label=close type="button"> </x-button>

        <x-button default_class="btn ripple btn-primary"  data-dismiss="modal"   wire:click.prevent='store'
            style="width: 100px; height: 38px; font-size:13px;"></x-button>
    </div>

    @filepondScripts
@push('js')
    <script>
      
      window.addEventListener('pondReset', e => {
 
        location.reload()
});
    </script>
@endpush
</div>
