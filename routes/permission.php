<?php

use App\Livewire\Role\RoleEdit;
use App\Livewire\Role\RoleCreate;
use App\Livewire\Role\RoleResource;
use Illuminate\Support\Facades\Route;
use App\Livewire\Dashboard\Ability\AbilityResource;
use App\Livewire\Dashboard\RoleModuleName\Create as CreateModuleName ;

use App\Livewire\UserRolesModules\UserRoleCreate;


Route::prefix('/ability')->name('ability.')->middleware(['web'])->group(function() {
    
    Route::get('index',AbilityResource::class)->name('index');
    Route::get('module-create',CreateModuleName::class)->name('module.create');
    
    
});


Route::prefix('/role')->name('role.')->middleware(['web'])->group(function() {
    
    Route::get('create/{id?}',RoleCreate::class)->name('create');
    Route::get('index',RoleResource::class)->name('index');
    Route::get('abilities/update/{id?}',RoleCreate::class)->name('update');
    Route::get('abilities/edit/{id?}',RoleEdit::class)->name('edit');
    
});

Route::prefix('/user-roles')->name('user-roles.')->middleware(['web'])->group(function() {
    
    Route::get('create/{userID?}',UserRoleCreate::class)->name('create');
    
});