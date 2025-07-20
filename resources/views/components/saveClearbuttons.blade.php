@props([
    'type' => '',
    'name' => 'حفظ',
    'divlclass' => '',
    'iclass' => '',
    '$iclassName' => '',
    'clear' => null,
    'close' => null,
])

<div>
 
    
    <div class="modal-footer " style="border-top:none;">

        @if ($clear)
            <x-button default_class="btn ripple btn-secondary" label="cancel" type="reset"> </x-button>
        @endif

        @if ($close)
            <x-button default_class="btn ripple btn-secondary" label="close" type="button"  data-dismiss="modal"> </x-button>
        @endif

        <x-button default_class="btn ripple btn-success" data-dismiss="modal" 
         wire:loading.remove {{$attributes}}
            style="width: 100px; height: 38px; font-size:13px;"></x-button>
    </div>


    <div wire:loading>
        <img src="{{ asset('template-assets/valex/img/loader.svg') }}" alt="Loader">
    </div>

</div>







{{-- <div class="d-flex justify-content-start"   dir="ltr">
    
    <x-button type="submit"   wire:loading.attr='disabled'></x-button>
    <x-button type="reset" name="مسح" class="bg-secondary"  wire:loading.attr='disabled'></x-button>
  
   
</div>   --}}
