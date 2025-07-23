<?php

namespace App\Observers;

use App\Models\Ability;
use Illuminate\Support\Facades\Cache;

class AbilityObserver
{
 
    public function created(Ability $ability): void
    {
        Cache::forget('abilities_list');
    }

 
    public function updated(Ability $ability): void
    {
        Cache::forget('abilities_list');
    }

 
    public function deleted(Ability $ability): void
    {
        Cache::forget('abilities_list');
    }
 
}
