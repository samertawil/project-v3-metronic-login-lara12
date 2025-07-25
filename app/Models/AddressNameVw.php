<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Builder;
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

    /**
     * @param  \Illuminate\Database\Eloquent\Builder<AddressNameVw>  $query
     * @param  string  $value
     * @return \Illuminate\Database\Eloquent\Builder<AddressNameVw>
     */
    public function scopeNameSearch(Builder $query, string $value): Builder
    {

        if ($value) {
            return $query->where('city_name', 'like', "%{$value}%");
        }
        return $query;
    }

    /**
     * @param  \Illuminate\Database\Eloquent\Builder<AddressNameVw>  $query
     * @param  string  $value
     * @return \Illuminate\Database\Eloquent\Builder<AddressNameVw>
     */
    public function scopeRegionListSearch(Builder $query, string $value): Builder
    {

        if ($value) {
            return $query->where('region_id', $value);
        }
        return $query;
    }

    /**
     * @param  \Illuminate\Database\Eloquent\Builder<AddressNameVw>  $query
     * @param  string  $value
     * @return \Illuminate\Database\Eloquent\Builder<AddressNameVw>
     */
    public function scopeCityListSearch(Builder $query, string $value): Builder
    {
        if ($value) {
            return $query->where('city_id', $value);
        }
        return $query;
    }

    /**
     * @param  \Illuminate\Database\Eloquent\Builder<AddressNameVw>  $query
     * @param  string  $value
     * @return \Illuminate\Database\Eloquent\Builder<AddressNameVw>
     */
    public function scopeNeighbourhoodListSearch(Builder $query, string $value): Builder
    {
        if ($value) {
            return $query->where('neighbourhood_id', $value);
        }
        return $query;
    }


    /**
     * @param  \Illuminate\Database\Eloquent\Builder<AddressNameVw>  $query
     * @param  string  $value
     * @return \Illuminate\Database\Eloquent\Builder<AddressNameVw>
     */
    public function scopeNeighbourhoodNameSearch(Builder $query, string $value): Builder
    {
        if ($value) {
            return $query->where('neighbourhood_name', 'like', "%{$value}%");
        }
        return $query;
    }


    /**
     * @param  \Illuminate\Database\Eloquent\Builder<AddressNameVw>  $query
     * @param  string  $value
     * @return \Illuminate\Database\Eloquent\Builder<AddressNameVw>
     */
    public function scopeLocationNameSearch(Builder $query, string $value): Builder
    {
        if ($value) {
            return $query->where('location_name', 'like', "%{$value}%");
        }
        return $query;
    }
}
