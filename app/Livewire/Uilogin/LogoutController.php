<?php

namespace  App\Livewire\Uilogin;

use App\Http\Controllers\Controller;
use App\Providers\RouteServiceProvider;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\RedirectResponse;

class LogoutController extends Controller
{
    public function __invoke(): RedirectResponse
    {
        
        switch (Auth::guard('web')->check()) {
            case 'true':
                Auth::guard('web')->logout();
                return redirect(route(config('uilogin.redirectToWebsite')));
                break;
            
            default:
            Auth::guard('empAuth')->logout();
            return redirect(route('employment.account.login'));
        }
      

       
    }
}
