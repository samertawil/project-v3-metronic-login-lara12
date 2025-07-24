<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

/**
 * @property string $location_name
 * @property int $neighbourhood_id
 */
class AddressNameVw extends Model
{
    use HasFactory;
    protected $table = 'address_name_vw';


    public function scopeNameSearch($query, $value)
    {

        if ($value) {
            return $query->where('city_name', 'like', "%{$value}%");
            // ->orwhere('region_name', 'like', "%{$value}%");
        }
    }


    public function scopeRegionListSearch($query, $value) {

        if($value) {
            return $query->where('region_id',$value);
        }

    }
    
    public function scopeCityListSearch($query, $value) {
        if($value) {
            return $query->where('city_id',$value);
        }
    } 

    public function scopeNeighbourhoodListSearch($query, $value) {
        if($value) {
            return $query->where('neighbourhood_id',$value);
        }
    } 
    
    public function scopeNeighbourhoodNameSearch($query, $value) {
        if($value) {
            return $query->where('neighbourhood_name','like',"%{$value}%");
        }
    } 

    public function scopeLocationNameSearch($query,$value) {
        if($value) {
            return $query->where('location_name','like',"%{$value}%");
        }
    }

}
