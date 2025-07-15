<?php

use App\Livewire\Contact\Index;
use App\Livewire\Contact\ContactList;
use Illuminate\Support\Facades\Route;
use App\Livewire\contact\ContactCreate;

 
Route::prefix('contact/')->name('contact.')->middleware('web', 'auth')->group( function() {

    Route::get('create',ContactCreate::class)->name('create');

      Route::get('index',Index::class)->name('index');

      Route::get('list',ContactList::class)->name('list');

});


 
