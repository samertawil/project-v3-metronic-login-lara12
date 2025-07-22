<?php

namespace App\Models;

use App\Models\ModuleName;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;


/**
 * @property-read \App\Models\ModuleName|null $module_name
 */

 
class Ability extends Model
{
    use HasFactory;

    protected $fillable=['ability_name','ability_description','url','activation','status_id','module_id','description' ];

    public static function booted() 
    {
       static::addGlobalScope('not-active',  function ($query) {
        return $query->where('activation','<>','0');
       });
    }

    public function sysName() {
        return $this->hasOne(SettingSystem::class,'id','module_id');
       }

       
       public function module_name()
       {
           return $this->belongsTo(ModuleName::class, 'module_id', 'id');
       }
       
 
       public function scopeSearchName($query,$value) {
        if($value) {
            $query->where('ability_name','like',"%{$value}%")->orWhere('ability_description','like',"%{$value}%");
        }
       
       }

       
       public function scopeSearchModuleId($query,$value) {
        if($value)
        {
            $query->where('module_id',$value);
        }
      
       }
}
