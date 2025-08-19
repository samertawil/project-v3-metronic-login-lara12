<?php

use Illuminate\Support\Facades\Route;
use App\Livewire\AppSetting\Setting\SettingIndex;
use App\Livewire\AppSetting\UserModule\UserIndex;
use App\Livewire\AppSetting\Setting\SettingCreate;
use App\Livewire\AppSetting\UserModule\UserCreate;
use App\Livewire\AppSetting\StatusModule\StatusClass;
use App\Livewire\TechnicalSupport\Dashboard\Create as DashboardTechSupportCreate;
use App\Livewire\TechnicalSupport\Website\Show as WebsiteTechSupportShow;
use App\Livewire\Appsetting\AddressesModule\AddressesIndex;

Route::prefix('app-setting/')->name('appsetting.')->middleware(['auth','web'])->group(function() {

//status
Route::get('status', StatusClass::class)->name('status');


// users
Route::get('/users/index', UserIndex::class)->name('user.index');
Route::get('/users/create', UserCreate::class)->name('user.create');


 
// settings
Route::get('setting/index',SettingIndex::class)->name('setting.index');
Route::get('setting/create',SettingCreate::class)->name('setting.create');
 

// Dashboard user technicalSupport
 
Route::get('support/create', DashboardTechSupportCreate::class)->name('support.create')->withoutMiddleware('auth');

// addresses setting
Route::get('addresses-index',AddressesIndex::class)->name('addresses.index');

});


Route::get('website/support/show', WebsiteTechSupportShow::class)->name('website.support.show');

include __DIR__.'/permission.php';

