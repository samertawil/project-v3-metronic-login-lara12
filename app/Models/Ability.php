<?php

namespace App\Models;

use App\Models\ModuleName;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasOne;

/**
 * @property-read \App\Models\ModuleName|null $module_name
 */


class Ability extends Model
{
    use HasFactory;

    protected $fillable = ['ability_name', 'ability_description', 'url', 'activation', 'status_id', 'module_id', 'description'];

    public static function booted()
    {
        static::addGlobalScope('not-active',  function ($query) {
            return $query->where('activation', '<>', '0');
        });
    }

    public function sysName(): HasOne
    {
        return $this->hasOne(SettingSystem::class, 'id', 'module_id');
    }


    public function module_name(): BelongsTo
    {
        return $this->belongsTo(ModuleName::class, 'module_id', 'id');
    }

    /**
     * @param  \Illuminate\Database\Eloquent\Builder<Ability>  $query
     * @param  string  $value
     * @return \Illuminate\Database\Eloquent\Builder<Ability>
     */
    public function scopeSearchName(Builder $query, string $value): Builder
    {
        if ($value) {
            $query->where('ability_name', 'like', "%{$value}%")->orWhere('ability_description', 'like', "%{$value}%");
        }
        return  $query;
    }

    /**
     * @param  \Illuminate\Database\Eloquent\Builder<Ability>  $query
     * @param  string  $value
     * @return \Illuminate\Database\Eloquent\Builder<Ability>
     */
    public function scopeSearchModuleId(Builder $query, string $value): Builder
    {
        if ($value) {
            $query->where('module_id', $value);
        }
        return  $query;
    }
}
