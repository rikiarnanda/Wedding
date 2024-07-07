<?php

use App\Http\Controllers\AuthController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\Admin\VendorController;
use App\Http\Controllers\Admin\CrewController;
use App\Http\Controllers\Admin\DokumentasiController;
use App\Http\Controllers\Admin\KonsepController;
use App\Http\Controllers\Admin\DekorasiController;
use App\Http\Controllers\Admin\PaketController;
use App\Http\Controllers\Admin\TestimoniController;
use App\Http\Controllers\Admin\BandController;
use App\Http\Controllers\Admin\MUAController;
use App\Http\Controllers\OrderController;
use App\Http\Controllers\Admin\McController;

Route::get('/register', [AuthController::class, 'showRegister'])->name('register');
Route::post('/register', [AuthController::class, 'register'])->name('daftar');
Route::get('/login', [AuthController::class, 'showLogin'])->name('login');
Route::post('/login', [AuthController::class, 'login'])->name('login');
Route::post('/logout', [AuthController::class, 'logout'])->name('logout');


Route::get('/dashboard', [HomeController::class, 'index'])->name('dashboard');
Route::get('/dashboard/crew', [HomeController::class, 'crew'])->name('dashboard.crew');
Route::get('/dashboard/vendor', [HomeController::class, 'vendor'])->name('dashboard.vendor');
Route::get('/dashboard/paket', [HomeController::class, 'paket'])->name('dashboard.paket');

Route::middleware('auth')->group(function () {

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
    Route::get('/testimoni/edit/{id}',[TestimoniController::class, 'editTestimoni'])->name('testimoni.edit');
    Route::put('/testimoni/update/{id}',[TestimoniController::class, 'updateTestimoni'])->name('testimoni.update');
    Route::delete('/testimoni/{id}', [TestimoniController::class, 'destroy'])->name('testimoni.destroy');

    // Konsep
    Route::get('/konsep', [KonsepController::class, 'konsep'])->name('konsep');
    Route::get('/konsep/create', [KonsepController::class, 'create'])->name('konsep.create');
    Route::post('/konsep', [KonsepController::class, 'store'])->name('konsep.store');
    Route::get('/konsep/edit/{id}', [KonsepController::class, 'editKonsep'])->name('konsep.edit');
    Route::put('/konsep/update/{id}', [KonsepController::class, 'updateKonsep'])->name('konsep.update');
    Route::delete('/konsep/{id}', [KonsepController::class, 'deleteKonsep'])->name('konsep.delete');

    // Band
    Route::get('/band', [BandController::class, 'band'])->name('band');
    Route::get('/band/create', [BandController::class, 'create'])->name('band.create');
    Route::post('/band', [BandController::class, 'store'])->name('band.store');
    Route::get('/band/edit/{id}', [BandController::class, 'editBand'])->name('band.edit');
    Route::put('/band/update/{id}', [BandController::class, 'updateBand'])->name('band.update');
    Route::delete('/band/{id}', [BandController::class, 'deleteBand'])->name('band.delete');

    // Dekorasi
    Route::get('/dekorasi', [DekorasiController::class, 'dekorasi'])->name('dekorasi');
    Route::get('/dekorasi/create', [DekorasiController::class, 'create'])->name('dekorasi.create');
    Route::post('/dekorasi', [DekorasiController::class, 'store'])->name('dekorasi.store');
    Route::get('/dekorasi/edit/{id}', [DekorasiController::class, 'editDekorasi'])->name('dekorasi.edit');
    Route::put('/dekorasi/update/{id}', [DekorasiController::class, 'updateDekorasi'])->name('dekorasi.update');
    Route::delete('/dekorasi/{id}', [DekorasiController::class, 'deleteDekorasi'])->name('dekorasi.delete');

    // Dokumentasi
    Route::get('/dokumentasi', [DokumentasiController::class, 'dokumentasi'])->name('dokumentasi');
    Route::get('/dokumentasi/create', [DokumentasiController::class, 'create'])->name('dokumentasi.create');
    Route::post('/dokumentasi', [DokumentasiController::class, 'store'])->name('dokumentasi.store');
    Route::get('/dokumentasi/edit/{id}', [DokumentasiController::class, 'editDokumentasi'])->name('dokumentasi.edit');
    Route::put('/dokumentasi/update/{id}', [DokumentasiController::class, 'updateDokumentasi'])->name('dokumentasi.update');
    Route::delete('/dokumentasi/{id}', [DokumentasiController::class, 'deleteDokumentasi'])->name('dokumentasi.delete');

    // MUA
    Route::get('/mua', [MUAController::class, 'mua'])->name('mua');
    Route::get('/mua/create', [MUAController::class, 'create'])->name('mua.create');
    Route::post('/mua', [MUAController::class, 'store'])->name('mua.store');
    Route::get('/mua/edit/{id}', [MUAController::class, 'editMUA'])->name('mua.edit');
    Route::put('/mua/update/{id}', [MUAController::class, 'updateMUA'])->name('mua.update');
    Route::delete('/mua/{id}', [MUAController::class, 'deleteMUA'])->name('mua.delete');

    // MC
    Route::get('/mc', [McController::class, 'mc'])->name('mc');
    Route::get('/mc/create', [McController::class, 'create'])->name('mc.create');
    Route::post('/mc', [McController::class, 'store'])->name('mc.store');
    Route::get('/mc/edit/{id}', [McController::class, 'editMc'])->name('mc.edit');
    Route::put('/mc/update/{id}', [McController::class, 'updateMc'])->name('mc.update');
    Route::delete('/mc/{id}', [McController::class, 'deleteMc'])->name('mc.delete');

    //Order
    // Route untuk admin
    Route::get('/orders/admin', [OrderController::class, 'orderAdmin'])->name('orders.admin')->middleware('auth', 'admin');
    Route::get('/orders/{id}/edit', [OrderController::class, 'editStatus'])->name('admin.orders.edit');
    Route::put('/orders/{id}/update-status', [OrderController::class, 'updateStatus'])->name('admin.orders.update_status');

    // Route untuk user
    Route::get('/orders/user', [OrderController::class, 'orderUser'])->name('orders.user');
    Route::get('/orders/create/{id}', [OrderController::class, 'create'])->name('user.orders.create');
    Route::post('/orders/store', [OrderController::class, 'store'])->name('user.orders.store');
});

Route::get('/', function () {
    return redirect()->route('dashboard');
});
