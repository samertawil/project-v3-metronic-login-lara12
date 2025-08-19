<?php
use Illuminate\Support\Facades\Route;
use App\Livewire\Login\Login;
use App\Livewire\Login\Register;
use App\Livewire\Login\ResetPassword;
use App\Livewire\Login\ChangePassword;
use App\Livewire\Login\ForgetPassword;
use App\Livewire\Login\LogoutController;
 
 

Route::middleware(['web'])->group(function () {

    Route::get('login', Login::class)->name('login');

    Route::get('register', Register::class)->name('register');


    Route::get('admin/password/change/{userId?}', ChangePassword::class)->name('password.change');

    Route::get('forget-password', ForgetPassword::class)->name('login.forgetpassword');

    Route::get('reset-password/{token}', ResetPassword::class)->name('password.reset');

    Route::post('logout', LogoutController::class)
        ->name('logout');

    Route::get('login-home', function () {
        return view('livewire.login.uilogin-home');
    })->name('login.home');
});






