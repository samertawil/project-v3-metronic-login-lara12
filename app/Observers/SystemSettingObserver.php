<?php

namespace App\Observers;

use App\Models\SettingSystem;
use Illuminate\Support\Facades\Cache;

class SystemSettingObserver
{
 
    public function created(SettingSystem $settingSystem): void
    {
          Cache::forget('systemData');
    }

 
    public function updated(SettingSystem $settingSystem): void
    {
        Cache::forget('systemData');
    }

 
    public function deleted(SettingSystem $settingSystem): void
    {
        Cache::forget('systemData');
    }

 
  

 
    
}
