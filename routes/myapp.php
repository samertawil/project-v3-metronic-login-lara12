<?php

use App\Livewire\MyApp\Contact\Index;
use Illuminate\Support\Facades\Route;
use App\Livewire\MyApp\contact\ContactCreate;
use App\Livewire\Myapp\CitzenServices\ServicesHome;
use App\Livewire\MyApp\CitzenServices\ServicesShow;
use App\Livewire\Myapp\CitzenServices\ServicesIndex;
use App\Livewire\Myapp\CitzenServices\ServicesCreate;
use App\Livewire\Myapp\Cards\Create as  CardsCreate;
use App\Livewire\Myapp\Cards\Resource as CardsResource;

 
Route::prefix('app/')->name('app.')->middleware('web', 'auth')->group( function() {

    Route::get('contacts/create',ContactCreate::class)->name('contact.create');
    Route::get('contacts/index',Index::class)->name('contact.index');

Route::get('citzen-services-create',ServicesCreate::class)->name('citzen.services.create');
Route::get('citzen-services-index',ServicesIndex::class)->name('citzen.services.index');
Route::get('citzen-services-home',ServicesHome::class)->name('citzen.services.home');
Route::get('citzen-services-show/{id}',ServicesShow::class)->name('citzen.services.show');

Route::get('cards/create', CardsCreate::class)->name('card.create');
Route::get('cards/resource', CardsResource::class)->name('card.resource');
 


});


 
 

