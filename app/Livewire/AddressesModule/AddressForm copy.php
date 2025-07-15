<?php

namespace App\Livewire\AddressesModule;

use Livewire\Component;
use Livewire\Attributes\Rule;
use Livewire\Attributes\Modelable;
use App\Services\CacheModelServices;
use App\Services\CacheStatusModelServices;

class AddressForm extends Component
{


    public  $region_id = [];
    public  $city_id = [];
    public $address_type = [];
    public  $neighbourhood_id = [];
    public  $location_id;
    public $cities = [];
    public $neighbourhoods = [];
    public $locations = [];
    public $statuses = [];
    public $reapeater = [''];
    public $index;


    public function addRow()
    {
        $this->reapeater[] = '';
    }



    public function addressDropDown()
    {



        foreach ($this->region_id as $key => $value) {


            if (is_null($this->region_id) == false) {

                $this->cities[$key] =  CacheModelServices::getCityTableData()->where('region_id', $this->region_id[$key]);
               

            }
          


            if (is_null($this->city_id) == false) {


                $this->neighbourhoods[$key] =  CacheModelServices::getNeighbourhoodTableData()->where('city_id', 1);

                  
                
            }

            if (is_null($this->neighbourhood_id) == false) {


                $this->locations = CacheModelServices::getLocationTableData()->where('neighbourhood_id', $this->neighbourhood_id);
            }
        }
    }

    public function consider()
    {

        $this->dispatch('address-property', [
            'region_id' => $this->region_id,
            'city_id' => $this->city_id,
            'neighbourhood_id' => $this->neighbourhood_id,
            'location_id' => $this->location_id,
        ]);
    }

    public function updated()
    {
        $this->dispatch('address-property', [
            'region_id' => $this->region_id,
            'city_id' => $this->city_id,
            'neighbourhood_id' => $this->neighbourhood_id,
            'location_id' => $this->location_id,
        ]);
    }

    public function placeholder()
    {
        return view('livewire.addresses-module.placeholder-items');
    }



    public function render()
    {

        $regions =  CacheModelServices::getRegionVwData();

        return view('livewire.addresses-module.address-form', compact('regions'));
    }
}
