<?php

use Illuminate\Support\Facades\Route;
use App\Livewire\Dashboard\Setting\SettingIndex;
use App\Livewire\Dashboard\UserModule\UserIndex;
use App\Livewire\Dashboard\Setting\SettingCreate;
use App\Livewire\Dashboard\UserModule\UserCreate;
use App\Livewire\Dashboard\StatusModule\StatusClass;
use App\Livewire\Dashboard\Cards\Create as  CardsCreate;
use App\Livewire\Dashboard\Cards\Resource as CardsResource;
use App\Livewire\TechnicalSupport\Dashboard\Create as DashboardTechSupportCreate;
use App\Livewire\TechnicalSupport\Website\Show as WebsiteTechSupportShow;

Route::prefix('dashboard/')->name('dashboard.')->middleware(['auth','web'])->group(function() {

//status
Route::get('status', StatusClass::class)->name('status');
Route::get('cards/create', CardsCreate::class)->name('card.create');
Route::get('cards/resource', CardsResource::class)->name('card.resource');


// users
Route::get('/users/index', UserIndex::class)->name('user.index');
Route::get('/users/create', UserCreate::class)->name('user.create');


 
// settings
Route::get('setting/index',SettingIndex::class)->name('setting.index');
Route::get('setting/create',SettingCreate::class)->name('setting.create');
 

// Dashboard user technicalSupport
 
Route::get('support/create', DashboardTechSupportCreate::class)->name('support.create')->withoutMiddleware('auth');

 

});


Route::get('website/support/show', WebsiteTechSupportShow::class)->name('website.support.show');

include __DIR__.'/permission.php';

