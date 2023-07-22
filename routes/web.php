<?php

use App\Models\User;
use App\Models\Layanan;
use App\Models\Orderan;
use App\Models\Rekening;
use App\Models\Informasi;
use App\Http\Middleware\CheckRole;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserControler;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\BokingController;
use App\Http\Controllers\EtiketController;
use App\Http\Controllers\LayananController;
use App\Http\Controllers\OrderanController;
use App\Http\Controllers\RekeningController;
use App\Http\Controllers\InformasiController;
/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/



Route::get('/login', [AuthController::class, 'showLoginForm'])->name('login');
Route::post('/login', [AuthController::class, 'login']);
Route::post('/logout', [AuthController::class, 'logout']);

Route::group(['prefix' => 'admin', 'middleware' => ['auth', 'role:admin']], function () {

    Route::get('/', function () {
        $informasi = Informasi::count();
        $rekeing = Rekening::count();
        $user = User::count();
        $orderan = Orderan::count();
        $layanan = Layanan::count();
        return view('admin.page.index', compact('informasi','user','orderan','layanan','rekeing'));
    })->name('admin');

    Route::resource('user', UserControler::class);

    Route::resource('layanan', LayananController::class);

    Route::resource('orderan', OrderanController::class);

    Route::resource('rekening', RekeningController::class);

    Route::resource('informasi', InformasiController::class);

});



Route::get('/', [EtiketController::class, 'index'])->name('index');

Route::get('detaillayanan/{slug}', [EtiketController::class, 'detail'])->name('detaillayanan');

Route::get('/daftar', function () {
    return view('daftar');
})->name('daftar');

Route::post('/daftar', [UserControler::class, 'store'])->name('daftar.store');

Route::get('/profile', [EtiketController::class, 'profile'])->name('profile');
Route::put('/profile', [EtiketController::class, 'profileupdate'])->name('profile.update');

Route::get('/riwayat', [EtiketController::class, 'riwayat'])->name('riwayat');

Route::get('/tiket', [EtiketController::class, 'tiket'])->name('tiket');

// web.php
Route::post('/booking', [BokingController::class, 'store'])->name('booking.store');
Route::put('/bayar/{id}', [EtiketController::class, 'update'])->name('bayar.update');


Route::get('/profile/password', [EtiketController::class, 'showPasswordForm'])->name('profile.password');
Route::put('/profile/password', [EtiketController::class, 'updatePassword'])->name('profile.updatePassword');


Route::get('/telaga-ngebel', function () {
    $informasi = Informasi::orderBy('created_at', 'asc')->first();
    return view('info', compact('informasi'));
})->name('info');

Route::get('/mloko-sewu', function () {
    $informasi = Informasi::orderBy('id', 'desc')->first();
    return view('info2', compact('informasi'));
})->name('info2');

Route::get('/about', function () {
    return view('faqs');
})->name('faqs');

Route::get('/help', function () {
    return view('help');
})->name('help');
