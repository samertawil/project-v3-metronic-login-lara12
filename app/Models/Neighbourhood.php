<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

/**
 * @property string $neighbourhood_name
 * @property int $city_id
 */
class Neighbourhood extends Model
{
    use HasFactory;

    protected $fillable=['neighbourhood_name','city_id','attributes'];

}
