<?php

use Illuminate\Support\Facades\Route;
use App\Livewire\Dashboard\Cards\Create as  CardsCreate;
use App\Livewire\Dashboard\Cards\Resource as CardsResource;
use App\Livewire\Dashboard\StatusModule\StatusClass;


Route::prefix('dashboard/')->name('dashboard.')->middleware(['auth','web'])->group(function() {


Route::get('status', StatusClass::class)->name('status');

Route::get('cards/create', CardsCreate::class)->name('card.create');

Route::get('cards/resource', CardsResource::class)->name('card.resource');


});