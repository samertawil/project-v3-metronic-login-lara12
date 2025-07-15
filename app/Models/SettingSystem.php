<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class SettingSystem extends Model
{
    use HasFactory;

    protected $table='setting_systems';

    protected $fillable=[ 'system_name','description' ];
       
   
}
