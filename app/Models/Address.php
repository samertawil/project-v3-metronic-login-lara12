<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Address extends Model
{
    use HasFactory;
    protected $fillable=['address_name','region_id','city_id','neighbourhood_id','location_id','address_type','gis','active','user_id','notes' ,'address_specific' 
    ,'attributes','contact_id',
];


}










