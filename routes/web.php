<?php

use App\Http\Controllers\ProfileController;
use App\Http\Controllers\MitraController;
use App\Http\Controllers\PelangganController;
use App\Http\Controllers\ProductController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('index');
});

// <!-- Route::get('/pelanggan', function () {
//     return view('pelanggan.pelanggan');
// }); -->

// <!-- Route::get('/dashboard', function () {
//     return view('dashboard');
// })->middleware(['auth', 'verified'])->name('dashboard'); -->

Route::middleware(['auth', 'verified'])->group(function () {
    Route::get('/dashboard/mitra', [MitraController::class, 'index'])->name('mitra.mitra');
    Route::get('/dashboard/pelanggan', [PelangganController::class, 'index'])->name('pelanggan.pelanggan');
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
    Route::get('/produk/tambah', [ProductController::class, 'tambah']);
    Route::get('/kategori', [MitraController::class, 'kategori'])->name('mitra.kategori');
    Route::post('/product/store', [ProductController::class, 'store']);
    Route::post('/product/update', [ProductController::class, 'update']);
    Route::get('/product/hapus/{id}', [ProductController::class, 'hapus']);
    Route::get('/product/edit/{id}', [ProductController::class, 'edit']);

});

// Route::middleware('auth')->group(function () {
//     Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
//     Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
//     Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
// });

require __DIR__.'/auth.php';
