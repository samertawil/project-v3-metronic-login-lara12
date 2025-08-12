<?php

namespace App\Services;

use App\Models\Status;
use Illuminate\Support\Facades\Cache;
use Illuminate\Database\Eloquent\Collection;

class CacheStatusModelServices
{

    public static function getData(): mixed
    {

        return Cache::rememberForever('statusData', function () {
            return Status::get();
        });
    }


    public function statusesPSubId(int|null $p_id_sub = null): Collection
    {
        return cache()->rememberForever(
            'statusData' . ($p_id_sub !== null ? "_{$p_id_sub}" : ''),
            fn() =>
            Status::select('status_name', 'id', 'p_id_sub','used_in_system_id','can_delete')
                ->when($p_id_sub !== null, function ($query) use ($p_id_sub) {
                    return $query->where('p_id_sub', $p_id_sub);
                })
                ->get()
        );
    }
}
