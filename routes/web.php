<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\{
    LoginController,
    LogoutController,
    SettingController,
};

use App\Http\Controllers\Admin\{
    DashboardAdminController,
    PegawaiController,
    PengirimController,
    SuratMasukAdminController,
    SuratKeluarAdminController,
};

use App\Http\Controllers\Pimpinan\{
    DashboardPimpinanController,
    DisposisiPimpinanController,
    SuratMasukPimpinanController,
    SuratKeluarPimpinanController,
};

use App\Http\Controllers\Pegawai\{
    DashboardPegawaiController, DisposisiPegawaiController
};


//Halaman utama (redirect ke halaman login)
Route::get('/', function () {
    return redirect('/login');
});

//Login
Route::controller(LoginController::class)->group(function () {
    Route::get('/login', 'index')->name('login');
    Route::post('/login', 'authenticate')->name('authenticate');
});

//users authentikasi (admin,pimpinan,pegawai)
Route::middleware(['auth'])->group(function () {
    //Admin
    Route::middleware(['admin'])
            ->prefix('admin')
            ->group(function () {
                Route::get('/dashboard', [DashboardAdminController::class, 'index'])->name('dashboard.admin');
                Route::resource('/pegawai', PegawaiController::class, ['except' => 'show']);
                Route::resource('/pengirim', PengirimController::class, ['except' => 'show']);
                Route::resource('/surat-masuk', SuratMasukAdminController::class);
                Route::resource('/surat-keluar', SuratKeluarAdminController::class);
    });

    //Pimpinan
    Route::middleware(['pimpinan'])
            ->prefix('pimpinan')
            ->as('pimpinan.')
            ->group(function () {
                Route::get('/dashboard', [DashboardPimpinanController::class, 'index'])->name('dashboard');
                Route::resource('/disposisi', DisposisiPimpinanController::class);
                Route::resource('/surat-masuk', SuratMasukPimpinanController::class)->only(['index', 'show']);
                Route::resource('/surat-keluar', SuratKeluarPimpinanController::class)->only(['index', 'show']);
    });

    //Pegawai
    Route::middleware(['pegawai'])
            ->prefix('pegawai')
            ->as('pegawai.')
            ->group(function () {
                Route::get('/dashboard', [DashboardPegawaiController::class, 'index'])->name('dashboard');
                Route::resource('/disposisi', DisposisiPegawaiController::class)->only(['index', 'update']);
    });

    //Setting & logout users (admin,pimpinan,pegawai)
    Route::resource('/setting', SettingController::class)->only(['edit','update']);
    Route::post('/logout', [LogoutController::class, 'logout'])->name('logout');
});