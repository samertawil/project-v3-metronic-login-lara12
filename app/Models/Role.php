<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Role extends Model
{
    use HasFactory;
     protected $fillable = ['granted_to_type', 'name', 'abilities','created_by','abilities_description'];

    protected $casts = [
      "abilities_description"=>'array',
       "abilities" => 'array',
    
    ];
 
    public function usersRelation()
    {
       return $this->belongsToMany(User::class, 'role_user');
    }
 
    public function scopeSearchName($query,$value){
      if($value) {
         $query->where('name','like',"%{$value}%");
      }
    }
 
 
}
