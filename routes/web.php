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

        Route::post('/logout', function () {
            return 'code is here';
        })->name('logout');

        Route::post('/home', function () {
            return 'code is here';
        })->name('home');

        Route::get('dashboard', Dashboard::class)->name('dashboard.home')->middleware('auth');

        Route::get('/', Index::class)->name('website');

        


        include __DIR__ . '/uiauth.php';

        include __DIR__ . '/dashboard.php';

        include __DIR__ . '/citzenServices.php';

        include __DIR__ . '/contact.php';
    }
);


Route::get('send-notification', [SendNotificationController::class, 'index']);

Route::get('contact-us', ContactUs::class)->name('contact.us');
