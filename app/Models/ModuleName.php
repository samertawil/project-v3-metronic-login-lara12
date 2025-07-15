<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class ModuleName extends Model
{
  protected $fillable=['name','description','active'];



  public function scopeSearchName($query,$value) {
    if($value) {
          
      $query->where('name','like',"%{$value}%");
  }
  }

}
