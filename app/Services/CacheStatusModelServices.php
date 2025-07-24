<?php

namespace App\Services;

use App\Models\Status;
use Illuminate\Support\Facades\Cache;

class CacheStatusModelServices {

    public static function getData(): mixed {

       return Cache::rememberForever('statusData', function () {
            return Status::get();
    });

}

}