<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

/**
 * @property string $city_name
 * @property int $region_id
 */

class City extends Model
{
    use HasFactory;

    protected $fillable=['city_name','region_id','attributes'];

 
}
