<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\Model;

class ModuleName extends Model
{
  protected $fillable = ['name', 'description', 'active'];


  /**
   * @param  \Illuminate\Database\Eloquent\Builder<ModuleName>  $query
   * @param  string  $value
   * @return \Illuminate\Database\Eloquent\Builder<ModuleName>
   */
  public function scopeSearchName(Builder $query, string $value): Builder
  {
    if ($value) {

      $query->where('name', 'like', "%{$value}%");
    }
    return $query;
  }
}
