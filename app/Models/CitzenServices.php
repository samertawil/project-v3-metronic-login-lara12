<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class CitzenServices extends Model
{
   protected $casts=[
      'logo1'=>'json',
      'logo2'=>'json',
      'properties'=>'json',
   ];
   protected $fillable=[
    'num',
    'name',
    'url',
    'status_id',
    'Responsible',
    'url_active_from_date',
    'url_active_to_date',
    'active_from_date',
     'active_to_date',
     'active',
     'description',
     'note',
     'conditions',
     'route_name',
     'logo1',
     'logo2',
     'home_page_order',
     'teal',
     'deactive_note',
     'properties',
     'card_header',
   ];
}
