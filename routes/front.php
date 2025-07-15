<?php
 
use Livewire\Livewire;
use App\Livewire\Website\Index;
use Illuminate\Support\Facades\Route;
use App\Livewire\Dashboard\Cards\Create;
use App\Livewire\Dashboard\Cards\Resource;
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

      
      
        Route::get('dashboard/cards/create', Create::class);
        Route::get('dashboard/cards/resource', Resource::class);
 

        Route::get('/', Index::class);
    }
);
