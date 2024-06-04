<?php

use App\Http\Controllers\AuthController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\VendorController;
use App\Http\Controllers\CrewController;

Route::get('/login', [AuthController::class, 'showLogin'])->name('login');
Route::post('/login', [AuthController::class, 'login']);
Route::post('/logout', [AuthController::class, 'logout'])->name('logout');

Route::middleware('auth')->group(function () {
    Route::get('/dashboard', [AdminController::class, 'dashboard'])->name('dashboard');

    Route::get('/vendor', [VendorController::class, 'vendor'])->name('vendor');
    Route::get('/vendor/create', [VendorController::class, 'create'])->name('vendor.create');
    Route::post('/vendor', [VendorController::class, 'store'])->name('vendor.store');
    Route::get('/vendor/edit/{id}', [VendorController::class, 'editVendor'])->name('vendor.edit');
    Route::put('/vendor/update/{id}', [VendorController::class, 'updateVendor'])->name('vendor.update');
    Route::delete('/vendor/{id}', [VendorController::class, 'deleteVendor'])->name('vendor.delete');

    //paket
    Route::get('/paket', [AdminController::class, 'paket'])->name('paket');
    Route::get('/create-paket', [AdminController::class, 'formPaket'])->name('formPaket');
    Route::get('/edit-paket', [AdminController::class, 'editPaket'])->name('editPaket');

    // Crew
    Route::get('/crew', [CrewController::class, 'crew'])->name('crew');
    Route::get('/crew/create', [CrewController::class, 'create'])->name('crew.create');
    Route::post('/crew', [CrewController::class, 'store'])->name('crew.store');
    Route::get('/crew/edit/{id}', [CrewController::class, 'edit'])->name('crew.edit');
    Route::put('/crew/update/{id}', [CrewController::class, 'update'])->name('crew.update');
    Route::delete('/crew/{id}', [CrewController::class, 'destroy'])->name('crew.destroy');

    // Testimoni
    Route::get('/testimoni', [AdminController::class, 'testimoni'])->name('testimoni');
    Route::get('/create-testimoni', [AdminController::class, 'formTestimoni'])->name('formTestimoni');
    Route::get('/edit-testimoni', [AdminController::class, 'editTestimoni'])->name('editTestimoni');
});

Route::get('/', function () {
    return redirect()->route('login');
});
