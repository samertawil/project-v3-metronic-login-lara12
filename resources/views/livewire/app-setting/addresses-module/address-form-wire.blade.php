<div>

 
    
    <x-select class="custom-border-bottom-dotted " wire:model='address_type ' name="address_type" :options="$statuses->where('p_id_sub', 1240)->pluck('status_name', 'id')"
        ChoseTitle="طبيعة العنوان" divWidth="3"></x-select>



    <div class="d-flex border  align-items-center p-2 ">
        <x-select :options="$regions->pluck('region_name', 'region_id')" wire:change='addressDropDown' name="region_id" id="region_id" wire:model="region_id"
            label="yes"></x-select>


        @if ($cities)
            <x-select :options="$cities->pluck('city_name', 'id')" wire:model="city_id" wire:change='addressDropDown' name="city_id" id="city_id"
                label="yes"></x-select>
        @endif

        @if ($neighbourhoods)
            <x-select :options="$neighbourhoods->pluck('neighbourhood_name', 'id')" wire:model="neighbourhood_id" wire:change='addressDropDown'
                name="neighbourhood_id" id="neighbourhood_id" label="yes"></x-select>
        @endif

        @if ($locations)
            <x-select :options="$locations->pluck('location_name', 'id')" wire:model="location_id" wire:change='addressDropDown' name="location_id"
                id="location_id" label="yes"></x-select>
        @endif


    </div>


    <div wire:loading   >
        <img src="{{ asset('template-assets/valex/img/loader.svg') }}"  
            alt="Loader">
    </div>
 
 


 


</div>
