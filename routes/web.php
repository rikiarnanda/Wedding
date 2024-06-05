<?php

use App\Http\Controllers\AuthController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\VendorController;
use App\Http\Controllers\CrewController;
use App\Http\Controllers\PaketController;
use App\Http\Controllers\TestimoniController;

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

    // Paket
    Route::get('/paket', [PaketController::class, 'paket'])->name('paket');
    Route::get('/paket/create', [PaketController::class, 'create'])->name('paket.create');
    Route::post('/paket', [PaketController::class, 'store'])->name('paket.store');
    Route::get('/paket/edit/{id}', [PaketController::class, 'edit'])->name('paket.edit');
    Route::put('/paket/update/{id}', [PaketController::class, 'update'])->name('paket.update');
    Route::delete('/paket/{id}', [PaketController::class, 'destroy'])->name('paket.destroy');

    // Crew
    Route::get('/crew', [CrewController::class, 'crew'])->name('crew');
    Route::get('/crew/create', [CrewController::class, 'create'])->name('crew.create');
    Route::post('/crew', [CrewController::class, 'store'])->name('crew.store');
    Route::get('/crew/edit/{id}', [CrewController::class, 'edit'])->name('crew.edit');
    Route::put('/crew/update/{id}', [CrewController::class, 'update'])->name('crew.update');
    Route::delete('/crew/{id}', [CrewController::class, 'destroy'])->name('crew.destroy');

    // Testimoni
    Route::get('/testimoni', [TestimoniController::class, 'testimoni'])->name('testimoni');
    Route::get('/testimoni/create', [TestimoniController::class, 'create'])->name('testimoni.create');
    Route::post('/testimoni', [TestimoniController::class, 'store'])->name('testimoni.store');
    Route::delete('/testimoni/{id}', [TestimoniController::class, 'destroy'])->name('testimoni.destroy');
});

Route::get('/', function () {
    return redirect()->route('login');
});
