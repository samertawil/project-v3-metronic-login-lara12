<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

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

       

       public function moduleName() {
        return $this->hasOne(ModuleName::class,'id','module_id');
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
