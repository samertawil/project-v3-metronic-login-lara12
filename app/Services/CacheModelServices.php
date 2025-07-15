<?php

namespace App\Services;

// use App\Models\City;
use App\Models\City;
use App\Models\Location;
use Livewire\WithPagination;
use App\Models\AddressNameVw;
use App\Models\Neighbourhood;
use Illuminate\Support\Facades\Cache;
 

class CacheModelServices
{

use WithPagination;
protected $paginationTheme ='bootstrap';

    public static function getRegionVwData()
    {
       
       return   Cache::rememberForever('ٌRegionVwData', function () {
          
                return   AddressNameVw::select('region_id', 'region_name')
                    ->groupby('region_id')
                    ->orderBy('region_id', 'ASC')
                    ->get();
             
        });
    }


    public static function getCityVwData()
    {
             
        return   Cache::rememberForever('CityVwData', function () {
            return   AddressNameVw::select('region_id', 'region_name', 'city_name', 'city_id')
                ->groupby('city_id')
                ->orderBy('city_id', 'DESC') 
                ->get();
               
        });
    }



    public static function getCityVwDataApi($groupBy='', $conditionCol='', $value='')
    {
             
            return   Cache::rememberForever('CityVwDataApi', function () use($groupBy, $conditionCol, $value) {
            return   AddressNameVw::select('region_id', 'region_name', 'city_name', 'city_id')->groupby($groupBy)
           ->where($conditionCol,$value)->get()->toArray();
           
              
               
        });
    }

    
    public static function getNeighbourhoodVwData()
    {
             
        return   Cache::rememberForever('NeighbourhoodVwData', function () {
            return   AddressNameVw::select('region_id', 'region_name', 'city_name', 'city_id','neighbourhood_id','neighbourhood_name')
                ->groupby('neighbourhood_id')
                ->orderBy('neighbourhood_id', 'DESC') 
                ->get();
               
        });
    }


    public static function getCityTableData()
    {
             
        return   Cache::rememberForever('CityTableData', function () {
            return    City::get();      
               
        });
    }

 
    public static function getNeighbourhoodTableData()
    {
             
        return   Cache::rememberForever('NeighbourhoodTableData', function () {
            return   Neighbourhood::get();      
               
        });
    }

    
 
    public static function getLocationTableData()
    {
             
        return   Cache::rememberForever('LocationTableData', function () {
            return   Location::get();      
               
        });
    }


   

 



 
}

 