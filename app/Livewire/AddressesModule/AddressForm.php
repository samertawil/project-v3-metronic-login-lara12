<?php

namespace App\Livewire\AddressesModule;

use Livewire\Component;
use Livewire\Attributes\Rule;
use Livewire\Attributes\Validate;
use Livewire\Attributes\Modelable;
use App\Services\CacheModelServices;
use App\Services\CacheStatusModelServices;
use Illuminate\View\View;

class AddressForm extends Component
{

    #[Validate(['required', 'exists:regions,id'])]
    public mixed  $region_id = [];
    #[Validate(['required', 'exists:cities,id'])]
    public  mixed $city_id = [];
    #[Validate(['required'])]
    public mixed $address_type = [];
    public mixed  $neighbourhood_id = [];
    public  mixed $location_id = [];
    public mixed $cities = [];
    public mixed $neighbourhoods = [];
    public mixed $locations = [];
    public mixed $notes=[];
    public mixed $address_specific=[];
    public mixed $statuses = [];
    public mixed $reapeater = [''];

   
   

    public function addRow(): void
    {
        $this->reapeater[] = '';
    }

 

    public function removeRow(mixed $index): void
    {
        unset($this->reapeater[$index]);
        $this->reapeater = array_values($this->reapeater);
    }



    public function addressDropDown(): void
    {

      
        if (is_null($this->region_id) == false) {

            foreach ($this->region_id as $key => $value) {

                $this->cities[$key] =  CacheModelServices::getCityTableData()->where('region_id', $this->region_id[$key]);
            }
         
            
        } 
 
      
       
            if (is_null($this->city_id) == false) {
           
            foreach ($this->city_id as $key => $value) {


                $this->neighbourhoods[$key] =  CacheModelServices::getNeighbourhoodTableData()->where('city_id', $this->city_id[$key]);
            }
          
          
        }

       

            if (is_null($this->neighbourhood_id) == false) {

                foreach ($this->neighbourhood_id as $key => $value) {

                $this->locations[$key] = CacheModelServices::getLocationTableData()->where('neighbourhood_id', $this->neighbourhood_id[$key]);
            }
        }

    }



    public function consider(): void
    {

            $this->validate();
                    
            $this->dispatch('address-property', [
            'notes'=>$this->notes,
            'address_specific'=>$this->address_specific,
            'address_type'=>$this->address_type,
            'region_id' => $this->region_id,
            'city_id' => $this->city_id,
            'neighbourhood_id' => $this->neighbourhood_id,
            'location_id' => $this->location_id,
          
        ]);

        $this->dispatch('closeModel');
    }

    public function placeholder(): mixed
    {
        return view('livewire.addresses-module.placeholder-items');
    }



    public function render(): View
    {
 
        $regions =  CacheModelServices::getRegionVwData();

        return view('livewire.addresses-module.address-form', compact('regions'));
    }
}
