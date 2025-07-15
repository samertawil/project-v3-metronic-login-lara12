<?php

 

use Illuminate\Support\Facades\Route; 
use App\Livewire\UserModule\UserCreate;
use App\Livewire\UserModule\UserIndex;
 
 


Route::get('/users/index', UserIndex::class)->name('user.index');
Route::get('/users/create', UserCreate::class)->name('user.create');
 
 


