<?php

namespace App\Observers;

use App\Models\Status;
use Illuminate\Support\Facades\Cache;

class StatusObserver
{

    public function created(Status $status): void
    {
        $p_id_sub = $status->p_id_sub;
       
        Cache::forget('statusData');
       
        Cache::forget('statusData'. ($p_id_sub !== null ? "_{$p_id_sub}" : ''));
      
    }
 

    public function updated(Status $status): void
    {
        $p_id_sub = $status->p_id_sub;

        Cache::forget('statusData');

        Cache::forget('statusData'. ($p_id_sub !== null ? "_{$p_id_sub}" : ''));
    }


    public function deleted(Status $status): void
    {
        $p_id_sub = $status->p_id_sub;

        Cache::forget('statusData');

        Cache::forget('statusData'. ($p_id_sub !== null ? "_{$p_id_sub}" : ''));
    }


}
