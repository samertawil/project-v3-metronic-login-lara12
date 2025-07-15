<div>

 
    
        <div class="form-group row align-items-center fv-plugins-icon-container has-danger">
            <label class="col-xl-3 col-lg-3 col-form-label">{{ __('customTrans.address_type') }}</label>
            <div class="col-lg-9 col-xl-9">
                <div class="checkbox-inline ">
                    @foreach ($statuses->where('p_id_sub', config('myConstants.addressType')) as $address_type)
                        <label class="radio" style="margin:0px 5px;">
                            <input name="address_type" wire:model='address_type' type="radio"  style="margin:0px 5px;"
                                value=" {{ $address_type->id }}" class="is-invalid">
                            <span class="mx-2"></span>
                            {{ $address_type->status_name }}
                        </label>
                    @endforeach


                </div>
                {{-- <div class="fv-plugins-message-container">
                    <div data-field="addressType" data-validator="choice" class="text-muted" style="font-size: 8px;">
                        {{ __('customTrans.Please select at least 1 option') }}</div>
                </div> --}}
            </div>
        </div>

        <div class=" form-group row fv-plugins-icon-container has-success">
            <label class="col-xl-3 col-lg-3 col-form-label">{{ __('customTrans.region_name') }}</label>
            <div class="col-lg-9 col-xl-9">
                <select name="region_id" wire:model.live='region_id'
                    class="form-control form-control-lg form-control-solid">
                    <option value="" hidden>{{ __('customTrans.choose') }}</option>
                    @foreach ($regions as $region)
                        <option value="{{ $region->region_id }}">
                            {{ $region->region_name }}</option>
                    @endforeach
                </select>
                <div class="fv-plugins-message-container"></div>
            </div>
        </div>


        <div class=" form-group row fv-plugins-icon-container has-success">
            <label class="col-xl-3 col-lg-3 col-form-label">{{ __('customTrans.city_name') }}</label>
            <div class="col-lg-9 col-xl-9">
                <select name="city_id" wire:model.live='city_id'
                    class="form-control form-control-lg form-control-solid">
                    <option value="" hidden>{{ __('customTrans.choose') }}</option>
                    @foreach ($cities->where('region_id', $region_id) as $citiy)
                        <option value="{{ $citiy->id }}">
                            {{ $citiy->city_name }}</option>
                    @endforeach
                </select>
                <div class="fv-plugins-message-container"></div>
            </div>
        </div>

        <div class=" form-group row fv-plugins-icon-container has-success">
            <label class="col-xl-3 col-lg-3 col-form-label">{{ __('customTrans.neighbourhood_name') }}</label>
            <div class="col-lg-9 col-xl-9">
                <select name="neighbourhood_id" wire:model.live='neighbourhood_id'
                    class="form-control form-control-lg form-control-solid">
                    <option value="" hidden>{{ __('customTrans.choose') }}</option>
                    @foreach ($neighbourhoods->where('city_id', $city_id) as $neighbourhood)
                        <option value="{{ $neighbourhood->id }}">
                            {{ $neighbourhood->neighbourhood_name }}</option>
                    @endforeach
                </select>
                <div class="fv-plugins-message-container"></div>
            </div>
        </div>

        <div class=" form-group row fv-plugins-icon-container has-success">
            <label class="col-xl-3 col-lg-3 col-form-label">{{ __('customTrans.location_name') }}</label>
            <div class="col-lg-9 col-xl-9">
                <select name="location_id" wire:model='location_id'
                    class="form-control form-control-lg form-control-solid">
                    <option value="" hidden>{{ __('customTrans.choose') }}</option>
                    @foreach ($locations->where('neighbourhood_id', $neighbourhood_id) as $location)
                        <option value="{{ $location->id }}">
                            {{ $location->location_name }}</option>
                    @endforeach
                </select>
                <div class="fv-plugins-message-container"></div>
            </div>
        </div>
 <button type="button" wire:click='consider'>consider</button>
</div>
