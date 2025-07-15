<div>


    <div class="d-flex border  align-items-center p-2 " id="address-cont">


        <x-select class=" js-select2-address setDataSelect" wireIgone jsSelect2 divId="regionDivId" :options="$regions->pluck('region_name', 'region_id')"
            name="region_id" id="region_id" wire:model="region_id" label="yes" :dataUrl="route('address.api.create')" wire:ignore></x-select>


        <x-select class=" js-select2-address setDataSelect" wireIgone jsSelect2 id="city_id" name="city_id"
            wire:model="city_id" label="yes" wire:ignore></x-select>


        <x-select class="js-select2-address setDataSelect" wireIgone jsSelect2 id="neighbourhood_id" name="neighbourhood_id"
            wire:model="neighbourhood_id" label="yes" wire:ignore></x-select>


        <x-select class=" js-select2-address setDataSelect" wireIgone jsSelect2 id="location_id" name="location_id"
            wire:model="location_id" label="yes" wire:ignore></x-select>


    </div>

    @push('js')
        <script src="{{ asset('assets/my-js/jquery.blockUI.js') }}"></script>
        <script src="{{ asset('assets/my-js/blockui.js') }}"></script>

        <script src="{{ asset('assets/my-js/apiAddress.js') }}"></script>

        <script>
            $('.setDataSelect').on('change', function(event) {
                let modelName = $(this).attr('name');

                @this.set(modelName, event.target.value);
            })
        </script>

        <script>
            window.addEventListener('reset-items', event => {
                $('.js-select2').val(null).trigger('change');

            })
        </script>
    @endpush


</div>
