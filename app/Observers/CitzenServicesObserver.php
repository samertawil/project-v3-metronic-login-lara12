<?php

namespace App\Observers;

use App\Models\CitzenServices;
use Illuminate\Support\Facades\Cache;

class CitzenServicesObserver
{
  
    public function created(CitzenServices $citzenServices): void
    {
       Cache::forget('citizen-services-data');
    }

   
    public function updated(CitzenServices $citzenServices): void
    {
        Cache::forget('citizen-services-data');
    }

  
    public function deleted(CitzenServices $citzenServices): void
    {
        Cache::forget('citizen-services-data');
    }

   
    public function restored(CitzenServices $citzenServices): void
    {
        //
    }

 
    public function forceDeleted(CitzenServices $citzenServices): void
    {
        //
    }
}
