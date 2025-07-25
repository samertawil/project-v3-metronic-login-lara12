<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;

class Role extends Model
{
   use HasFactory;
   protected $fillable = ['granted_to_type', 'name', 'abilities', 'created_by', 'abilities_description'];

   protected $casts = [
      "abilities_description" => 'array',
      "abilities" => 'array',

   ];

   public function usersRelation(): BelongsToMany
   {
      return $this->belongsToMany(User::class, 'role_user');
   }

   /**
    * @param  \Illuminate\Database\Eloquent\Builder<Role>  $query
    * @param  string  $value
    * @return \Illuminate\Database\Eloquent\Builder<Role>
    */
   public function scopeSearchName(Builder $query, $value): Builder
   {
      if ($value) {
         $query->where('name', 'like', "%{$value}%");
      }
      return  $query;
   }
}
