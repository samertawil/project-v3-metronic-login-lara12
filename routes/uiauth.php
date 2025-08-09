<?php
use App\Livewire\Uilogin\Login;
use App\Livewire\Uilogin\Register;
use Illuminate\Support\Facades\Route;
use App\Livewire\Uilogin\ResetPassword;
use App\Livewire\Uilogin\ChangePassword;
use App\Livewire\Uilogin\ForgetPassword;
use App\Livewire\Uilogin\LogoutController;
use App\Livewire\TechnicalSupport\TechSupportCreate;
 

Route::middleware(['web'])->group(function () {

    Route::get('login', Login::class)->name('login');

    Route::get('register', Register::class)->name('register');


    Route::get('admin/password/change/{userId?}', ChangePassword::class)->middleware('auth')->name('password.change');

    Route::get('forget-password', ForgetPassword::class)->name('uilogin.forgetpassword');

    Route::get('reset-password/{token}', ResetPassword::class)->name('password.reset');

    Route::post('logout', LogoutController::class)
        ->name('logout');

    Route::get('uilogin-home', function () {
        return view('livewire.ui_auth.uilogin-home');
    })->name('uilogin.home');
});




Route::prefix('support/')->middleware(['web'])->name('support.')->group(function () {
    Route::get('create', TechSupportCreate::class)->name('create');
});

