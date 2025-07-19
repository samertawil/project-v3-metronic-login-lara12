<?php

namespace App\Observers;

use App\Models\Neighbourhood;
use Illuminate\Support\Facades\Cache;

class NeighbourhoodObserver
{
  
    public function created(Neighbourhood $neighbourhood): void
    {
        Cache::forget('NeighbourhoodVwData');
        Cache::forget('NeighbourhoodTableData');
        Cache::forget('CityVwData');
    }
 
  
    public function updated(Neighbourhood $neighbourhood): void
    {
        Cache::forget('NeighbourhoodVwData');
        Cache::forget('NeighbourhoodTableData');
        Cache::forget('CityVwData');
    }

   
    public function deleted(Neighbourhood $neighbourhood): void
    {
        Cache::forget('NeighbourhoodVwData');
        Cache::forget('NeighbourhoodTableData');
        Cache::forget('CityVwData');
    }

    
}
