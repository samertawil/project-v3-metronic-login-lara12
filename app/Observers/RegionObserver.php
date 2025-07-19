<?php

namespace App\Observers;

use App\Models\Region;
use Illuminate\Support\Facades\Cache;

class RegionObserver
{
  
    public function created(Region $region): void
    {
        Cache::forget('ٌRegionVwData');
    }

  
    public function updated(Region $region): void
    {
        Cache::forget('ٌRegionVwData');
    }

   
    public function deleted(Region $region): void
    {
        Cache::forget('ٌRegionVwData');
    }

   
}
