<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use App\Notifications\CustomNotification;

class SendNotificationController extends Controller
{
    public function index() {
        $user=User::find(1);
         $user->notify(new CustomNotification());

    }
}
