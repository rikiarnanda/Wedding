<?php

use App\Http\Controllers\AuthController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AdminController;

Route::get('/login', [AuthController::class, 'showLogin'])->name('login');
Route::post('/login', [AuthController::class, 'login']);
Route::post('/logout', [AuthController::class, 'logout'])->name('logout');

Route::middleware('auth')->group(function () {
    Route::get('/dashboard', [AdminController::class, 'dashboard'])->name('dashboard');
    Route::get('/vendors', [AdminController::class, 'vendors'])->name('vendor');
    Route::get('/create-vendor', [AdminController::class, 'formVendor'])->name('formVendor');
    Route::get('/edit-vendor', [AdminController::class, 'editVendor'])->name('editVendor');

    //paket
    Route::get('/paket', [AdminController::class, 'paket'])->name('paket');
    Route::get('/create-paket', [AdminController::class, 'formPaket'])->name('formPaket');
    Route::get('/edit-paket', [AdminController::class, 'editPaket'])->name('editPaket');

    // Crew
    Route::get('/crew', [AdminController::class, 'crew'])->name('crew');
    Route::get('/create-crew', [AdminController::class, 'formCrew'])->name('formCrew');
    Route::get('/edit-crew', [AdminController::class, 'editCrew'])->name('editCrew');

    // Testimoni
    Route::get('/testimoni', [AdminController::class, 'testimoni'])->name('testimoni');
    Route::get('/create-testimoni', [AdminController::class, 'formTestimoni'])->name('formTestimoni');
    Route::get('/edit-testimoni', [AdminController::class, 'editTestimoni'])->name('editTestimoni');
});

Route::get('/', function () {
    return redirect()->route('login');
});
