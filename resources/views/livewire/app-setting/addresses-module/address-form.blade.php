<div>

    @foreach ($reapeater as $index => $value)
    <div class="d-flex">
        <x-select class="custom-border-bottom-dotted " wire:model='address_type.{{ $index }}' name="address_type"
        :options="$statuses->where('p_id_sub', config('myConstants.addressType'))->pluck('status_name', 'id')" ChoseTitle="addressType" divWidth="3"></x-select>

        <x-actions mins  wire:click.prevent='removeRow({{ $index }})' class="bg-info"></x-actions >
    </div>
       

        <div class="d-flex border  align-items-center p-2 ">

            <div class="w-25 ml-2">

                <Label class="col-form-label">المحافظة</Label>
                <Select class="form-control @error('region_id') is-invalid
                    
                @enderror " wire:model='region_id.{{ $index }}' wire:change='addressDropDown'
                    name='region_id.{{ $index }}'>

                    <option value="">اختار</option>
                    @foreach ($regions as $key => $region)
                        <option value="{{ $region->region_id }}">{{ $region->region_name }}</option>
                    @endforeach
                </Select>
                @include('layouts._show-error',['field_name'=>'region_id'])
            </div>
            @if ($cities)
                <div class="w-25 ml-2">
                    <Label class="col-form-label">المدينة</Label>
                    <Select class="form-control  @error('city_id') is-invalid
                    
                    @enderror " wire:model='city_id.{{ $index }}' wire:change='addressDropDown'
                        name='city_id.{{ $index }}'>
                        <option value="">اختار</option>
                        @foreach ($cities[$index] ?? [] as $key => $city)
                            <option value="{{ $city->id }}">{{ $city->city_name }}</option>
                        @endforeach
                    </Select>
                    @include('layouts._show-error',['field_name'=>'city_id'])
                </div>

 
            @endif



            @if ($neighbourhoods)
                <div class="w-25 ml-2">
                    <Label class="col-form-label">الحي</Label>
                    <Select class="form-control" wire:model='neighbourhood_id.{{ $index }}'
                        wire:change='addressDropDown' name='neighbourhood_id.{{ $index }}'>
                        <option value="">اختار</option>
                        @foreach ($neighbourhoods[$index] ?? [] as $key => $neighbourhood)
                            <option value="{{ $neighbourhood->id }}">{{ $neighbourhood->neighbourhood_name }}</option>
                        @endforeach
                    </Select>
                </div>
       
            @endif


            @if ($locations)


                <div class="w-25 ml-2">
                    <Label class="col-form-label">المنطقة</Label>
                    <Select class="form-control" wire:model='location_id.{{ $index }}'
                        wire:change='addressDropDown' name='location_id.{{ $index }}'>
                        <option value="">اختار</option>
                        @foreach ($locations[$index] ?? [] as $key => $location)
                            <option value="{{ $location->id }}">{{ $location->location_name }}</option>
                        @endforeach
                    </Select>

                </div>
            @endif


        </div>

    
      

        <x-input wire:model='address_specific.{{ $index }}' name="address_specific" labelclass="pb-0 mt-3" divWidth="12"
            class=" custom-border-bottom-dotted pt-0 mt-0 pb-0 mb-0" label></x-input>

        <x-input wire:model='notes.{{ $index }}' name="notes" labelclass="pb-0 mt-3" divWidth="12"
            class=" custom-border-bottom-dotted pt-0 mt-0 pb-0 mb-0" label></x-input>

    @endforeach

  

    <div wire:loading>
        <img src="{{ asset('template-assets/valex/img/loader.svg') }}" alt="Loader">
    </div>


    <x-actions plus wire:click.prevent='addRow'></x-actions>

    <x-button name='حفظ' wire:click.prevent='consider'></x-button>
 
  

</div>
