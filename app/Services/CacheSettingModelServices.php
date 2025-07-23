<?php
namespace App\Services;
use App\Models\Setting;
use Illuminate\Support\Facades\Cache;

class CacheSettingModelServices
{


    public static function getData()
    {

        return   Cache::rememberForever('settingData', function () {
            // return   Setting::get()->pluck('value', 'key');
            return Setting::pluck('value', 'key')->toArray();

        });
    }
}
