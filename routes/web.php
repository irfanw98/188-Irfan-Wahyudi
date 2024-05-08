<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\{
    LoginController,
    LogoutController,
};

use App\Http\Controllers\Admin\{
    DashboardAdminController,
};

use App\Http\Controllers\Pimpinan\{
    DashboardPimpinanController,
};

use App\Http\Controllers\Pegawai\{
    DashboardPegawaiController,
};



Route::get('/', function () {
    return redirect('/login');
});

Route::get('/login', [LoginController::class, 'index'])->name('login');
Route::post('/login', [LoginController::class, 'authenticate'])->name('authenticate');

Route::middleware(['auth'])->group(function () {
    //Admin
    Route::middleware(['admin'])->group(function () {
        Route::group(['prefix' => 'admin'], function(){
            Route::get('/dashboard', [DashboardAdminController::class, 'index'])->name('dashboard.admin');
        });
    });

    //Pimpinan
    Route::middleware(['pimpinan'])->group(function () {
        Route::group(['prefix' => 'pimpinan'], function(){
            Route::get('/dashboard', [DashboardPimpinanController::class, 'index'])->name('dashboard.pimpinan');
        });
    });

    //Pegawai
    Route::middleware(['pegawai'])->group(function () {
        Route::group(['prefix' => 'pegawai'], function(){
            Route::get('/dashboard', [DashboardPegawaiController::class, 'index'])->name('dashboard.pegawai');
        });
    });

    Route::get('/logout', [LogoutController::class, 'logout'])->name('logout');
});