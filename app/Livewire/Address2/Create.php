<?php

namespace App\Livewire\Address2;

use Livewire\Component;
use App\Services\CacheModelServices;
use App\Services\CacheStatusModelServices;

class Create extends Component
{
    public $address_type;
    public $region_id;
    public $city_id;
    public $neighbourhood_id;
    public $location_id;


    public function updatedregionId($prop)
    {
        
        $this->region_id = $prop;
    }

    public function updatedCityId($prop)
    {

        $this->city_id = $prop;
    }


    public function updatedNeighbourhoodId($prop)
    {

        $this->neighbourhood_id = $prop;
    }

    public function consider()
    {

       
            $this->dispatch('address-property', [
            
            'address_type'=>$this->address_type,
            'region_id' => $this->region_id,
            'city_id' => $this->city_id,
            'neighbourhood_id' => $this->neighbourhood_id,
            'location_id' => $this->location_id,
          
        ]);

       
    }

    public function render()
    {
        $statuses = CacheStatusModelServices::getData();
        $regions = CacheModelServices::getRegionVwData();
        $cities  = CacheModelServices::getCityTableData();
        $neighbourhoods = CacheModelServices::getNeighbourhoodTableData();
        $locations = CacheModelServices::getLocationTableData();


        return view('livewire.address2.create', compact('statuses', 'regions', 'cities', 'neighbourhoods', 'locations'));
    }
}
