<?php

namespace App\Services;

use App\Models\AddressNameVw;


 

class AddressNameServices
{


    public static function getCityVwDataApi(string $groupBy='',string $conditionCol='',string $value=''): mixed
    {
       
            return   AddressNameVw::
            select('region_id', 'region_name', 'city_name', 'city_id','neighbourhood_id','neighbourhood_name','location_id','location_name')
            ->groupby($groupBy)
            ->where($conditionCol,$value)->get();
               
       
    }
}

 