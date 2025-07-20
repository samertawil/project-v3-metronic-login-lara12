<?php

use App\Models\SettingSystem;
use App\Services\CacheSettingModelServices;



function myDateStyle1($date, $format = 'd/m/Y')
{
    if ($date)
        return \Carbon\Carbon::parse($date)->format($format);
}


function myDateStyle2($date, $format = 'Y-m-d H:i:s')
{
    if ($date)
        return \Carbon\Carbon::parse($date)->format($format);
}

function myDateStyleSearch($date, $format = 'Y-m-d')
{
    if ($date)
        return \Carbon\Carbon::parse($date)->format($format);
}



function setting($key)
{
    return CacheSettingModelServices::getData()[$key];
}


