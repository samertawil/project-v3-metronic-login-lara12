<?php

namespace App\Models;

use App\Models\SettingSystem;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\Collection;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Factories\HasFactory;

/**

 * @property \App\Models\Status $status_p_id
 * @property \App\Models\Status $status_p_id_sub
 */

class Status extends Model
{
    use HasFactory;


    protected $fillable = [
        'status_name',
        'p_id',
        'p_id_sub',
        'route_name',
        'page_name',
        'route_system_name',
        'description',
        'used_in_system_id',
    ];


    public function status_p_id(): BelongsTo
    {
        return $this->belongsTo(Status::class, 'p_id', 'id');
    }

    public function status_p_id_sub(): BelongsTo

    {
        return $this->belongsTo(Status::class, 'p_id_sub', 'id');
    }


    public function systemname(): BelongsTo
    {
        return $this->belongsTo(SettingSystem::class, 'used_in_system_id', 'id');
    }


    /**
     * @param  \Illuminate\Database\Eloquent\Builder<Status>  $query
     * @param  string  $value
     * @return \Illuminate\Database\Eloquent\Builder<Status>
     */
    public function scopeSearchName(Builder $query, string $value): Builder
    {
        if ($value) {
            $query->where('status_name', 'like', "%{$value}%");
        }
        return $query;
    }

    /**
     * @param  \Illuminate\Database\Eloquent\Builder<Status>  $query
     * @param  string  $value
     * @return \Illuminate\Database\Eloquent\Builder<Status>
     */
    public function scopeSearchpId(Builder $query, string $value): Builder
    {
        if ($value) {

            $query->where('p_id_sub', $value);
        }
        return $query;
    }


    /**
     * @param  \Illuminate\Database\Eloquent\Builder<Status>  $query
     * @param  string  $value
     * @return \Illuminate\Database\Eloquent\Builder<Status>
     */
    public function scopeSearchSystemName(Builder $query, string $value): Builder
    {
        if ($value) {
            $query->where('used_in_system_id', $value);
        }
        return $query;
    }


}
