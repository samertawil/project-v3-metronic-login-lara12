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

        <x-button default_class="btn ripple btn-success"  
         wire:loading.remove {{$attributes}}
            style="width: 100px; height: 38px; font-size:13px;"></x-button>
    </div>


    <div wire:loading>
        <img src="{{ asset('template-assets/valex/img/loader.svg') }}" alt="Loader">
    </div>

</div>




     {{-- <div class="modal-footer " style="border-top:none;">

        <x-button default_class="btn ripple btn-secondary" data-dismiss="modal" label=close type="button"> </x-button>

        <x-button default_class="btn ripple btn-primary"      wire:click.prevent='store'
            style="width: 100px; height: 38px; font-size:13px;"></x-button> 
    </div> --}}