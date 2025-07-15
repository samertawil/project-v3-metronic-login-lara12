<?php

namespace App\Livewire\AddressesModule;

use Livewire\Component;
use App\Services\CacheModelServices;

class AddressFormApi extends Component
{
    public  $region_id;
    public  $city_id;
    public  $neighbourhood_id;
    public  $location_id;

    public function render()
    {
        $regions =  CacheModelServices::getRegionVwData();
               
        return view('livewire.addresses-module.address-form-api',compact('regions'));
    }
}
