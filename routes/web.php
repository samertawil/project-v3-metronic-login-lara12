<?php

use Livewire\Livewire;
use App\Livewire\Dashboard;
use App\Livewire\Website\Index;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\SendNotificationController;
use App\Livewire\Website\ContactUs;
use Mcamara\LaravelLocalization\Facades\LaravelLocalization;



Route::group(
    [
        'prefix' => LaravelLocalization::setLocale(),
        'middleware' => ['localeSessionRedirect', 'localizationRedirect', 'localeViewPath']
    ],

    function () {
        Livewire::setUpdateRoute(function ($handle) {
            return Route::post('/livewire/update', $handle);
        });

      

        Route::get('dashboard', Dashboard::class)->name('dashboard.home')->middleware('auth');

        Route::get('/', Index::class)->name('website');

        


        include __DIR__ . '/login.php';

        include __DIR__ . '/appsetting.php';

        include __DIR__ . '/myapp.php';
    }
);


Route::get('send-notification', [SendNotificationController::class, 'index']);

Route::get('contact-us', ContactUs::class)->name('contact.us');
