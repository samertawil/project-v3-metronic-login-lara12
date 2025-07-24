<?php

use App\Models\Ability;
use Illuminate\Support\Facades\Cache;

class CacheAbilitiesServices
{

    public static function getData(): mixed {
       return $abilities = Cache::rememberForever('abilities_list', function () {
            return Ability::all();
        });
    }
   

}