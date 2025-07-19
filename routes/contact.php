<?php

use App\Livewire\Contact\Index;
 
use Illuminate\Support\Facades\Route;
use App\Livewire\contact\ContactCreate;
use App\Livewire\AddressesModule\AddressesIndex;

 
Route::prefix('contact/')->name('contact.')->middleware('web', 'auth')->group( function() {

    Route::get('create',ContactCreate::class)->name('create');

      Route::get('index',Index::class)->name('index');

      Route::get('addresses-index',AddressesIndex::class)->name('addresses.index');

 

});


 
 
 