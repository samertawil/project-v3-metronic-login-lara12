<?php


use App\Services\CacheSettingModelServices;


/**
 * Format given date using Carbon.
 *
 * @param  string|\DateTimeInterface|null  $date
 * @param  string  $format
 * @return string|null
 */
function myDateStyle1($date, $format = 'd/m/Y')
{
    if ($date) {

        return \Carbon\Carbon::parse($date)->format($format);
    }
       
        return null;
}

/**
 * Format given date using Carbon.
 *
 * @param  string|\DateTimeInterface|null  $date
 * @param  string  $format
 * @return string|null
 */
function myDateStyle2($date, $format = 'Y-m-d H:i:s')
{
    if ($date) {
        return \Carbon\Carbon::parse($date)->format($format);
    }
      return null;
}
/**
 * Format given date using Carbon.
 *
 * @param  string|\DateTimeInterface|null  $date
 * @param  string  $format
 * @return string|null
 */
function myDateStyleSearch($date, $format = 'Y-m-d')
{
    if ($date) {
        return \Carbon\Carbon::parse($date)->format($format);
    }
       return null;
}



function setting(string $key): mixed
{
    return CacheSettingModelServices::getData()[$key] ?? null;
}


