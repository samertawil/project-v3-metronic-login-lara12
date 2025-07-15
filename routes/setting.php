<?php

use Illuminate\Support\Facades\Route;
use App\Livewire\Setting\SettingIndex;
use App\Livewire\Setting\SettingCreate;

Route::prefix('setting/')->middleware('web')->name('setting.')->group(function() {

    Route::get('index',SettingIndex::class)->name('index');
    Route::get('create',SettingCreate::class)->name('create');
 
});