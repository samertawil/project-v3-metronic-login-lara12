<?php

namespace App\Models;

use App\Models\SettingSystem;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Status extends Model
{
    use HasFactory;


    protected $fillable = [
        'status_name', 'p_id',
        'p_id_sub',
        'route_name', 'page_name',
        'route_system_name', 'description',
        'used_in_system_id',
    ];

 
    public function status_p_id()
    {
        return $this->hasOne(status::class, 'id', 'p_id');
    }

    public function status_p_id_sub()
    {
        return $this->hasOne(status::class, 'id', 'p_id_sub');
    }

    public function systemname()
    {
        return $this->hasOne(SettingSystem::class, 'id', 'used_in_system_id');
    }


   
    public function scopeSearchName($query,$value) {
        if($value) {
            $query->where('status_name','like',"%{$value}%");
        }
    }
    
    public function scopeSearchpId($query,$value) {
        if($value) {
          
            $query->where('p_id_sub', $value );
        }
    }


    
    public function scopeSearchSystemName($query, $value) {
        if($value) {
            $query->where('used_in_system_id',$value);
        }
    }
}
