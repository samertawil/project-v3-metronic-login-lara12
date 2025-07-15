<?php

use App\Livewire\StatusModule\StatusClass;
use Illuminate\Support\Facades\Route;
 


Route::get('/status', StatusClass::class)->name('status');


