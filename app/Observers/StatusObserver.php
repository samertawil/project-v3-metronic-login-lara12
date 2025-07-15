<?php

namespace App\Observers;

use App\Models\Status;
use Illuminate\Support\Facades\Cache;

class StatusObserver
{

    public function created(Status $status): void
    {
        Cache::forget('statusData');
    }


    public function updated(Status $status): void
    {
        Cache::forget('statusData');
    }


    public function deleted(Status $status): void
    {
        Cache::forget('statusData');
    }


}
