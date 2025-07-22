<div>

    @props([
        'idName' => '',
        'title' => '',
        'width' => 'lg',
        'modalType' => null,
        'footer' => null,
    ])


    <div wire:ignore.self class="modal fade" id="{{ $idName }}">
        <div class="modal-dialog modal-{{ $width }} {{ $modalType }} " role="document">
            <div class="modal-content modal-content-demo  ">
                <div class="modal-header">
                    <h6 class="modal-title text-dark">{{ $title }}</h6>
                    <button aria-label="Close" class="close"
                        data-dismiss="modal" type="button">x</button>
                </div>

                <div class="modal-body">
                    {{ $slot }}
                </div>

                @if (!$footer)
                <div class="modal-footer ">
                    <button class="btn ripple btn-secondary" data-dismiss="modal"
                        type="button">{{ __('customTrans.close') }}</button>
                    {{ $ModalButton ?? '' }}

                </div>
            @endif
            </div>
        </div>
    </div>


    @push('js')
        <script>
            var modalId = $('.modal').attr('id');
            
            window.addEventListener('closeModel', event => {
                $(`#${modalId}`).modal('hide');
            })
        </script>
    @endpush

</div>


{{-- 
<div class="modal-footer"  >
            
    <x-button default_class="btn ripple btn-secondary "    label="close" data-dismiss="modal">
    </x-button>

    <x-button default_class="btn ripple btn-primary "   style="width: 100px;"
        wire:click.prevent='storeAbility'>{{ __('customTrans.save') }}</x-button>

</div>   --}}



{{-- <x-slot:ModalButton>

<div class="d-flex justify-content-center">
   <x-button wire:click='store'></x-button>
</div>
</x-slot:ModalButton> --}}