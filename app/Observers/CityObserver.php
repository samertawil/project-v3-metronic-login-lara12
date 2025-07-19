<?php

namespace App\Observers;

use App\Models\City;
use Illuminate\Support\Facades\Cache;

class CityObserver
{
 
    public function created(City $city): void
    {
        Cache::forget('CityVwData');
        Cache::forget('CityTableData');
    }

 
    public function updated(City $city): void
    {
       Cache::forget('CityVwData');
       Cache::forget('CityTableData');
       
    }

 
    public function deleted(City $city): void
    {
        Cache::forget('CityVwData');
        Cache::forget('CityTableData');
    }

 
 
}
