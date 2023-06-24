<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function() {return redirect()->route('login');});


Route::middleware(['auth'])->group(function () {
    Route::get('/dashboard', [App\Http\Controllers\DashboardController::class, 'dashboard'])->name('dashboard');

    Route::controller(App\Http\Controllers\Admin\AdminController::class)->prefix('admin')->name('admin.')->group(function () {
        Route::get('/dashboard', 'dashboard')->name('dashboard');

        // Route::get('/data-materi', 'data_materi')->name('data_materi');
        // Route::post('/data-materi-create', 'data_materi_create')->name('data_materi_create');
        // Route::post('/data-materi-store', 'data_materi_store')->name('data_materi_store');
        // Route::put('/data-materi-edit', 'data_materi_edit')->name('data_materi_edit');
        // Route::put('/data-materi-update', 'data_materi_update')->name('data_materi_update');
        // Route::delete('/data-materi-delete', 'data_materi_delete')->name('data_materi_delete');
    });

    Route::controller(App\Http\Controllers\Dosen\DosenController::class)->prefix('dosen')->name('dosen.')->group(function () {
        Route::get('/dashboard', 'dashboard')->name('dashboard');
    });

    Route::controller(App\Http\Controllers\Mahasiswa\MahasiswaController::class)->prefix('mahasiswa')->name('mahasiswa.')->group(function () {
        Route::get('/dashboard', 'dashboard')->name('dashboard');
    });
});

require __DIR__.'/auth.php';
