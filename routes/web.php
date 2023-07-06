<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserControler;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\BokingController;
use App\Http\Controllers\EtiketController;
use App\Http\Controllers\LayananController;



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

Route::group(['prefix' => 'admin'], function () {

    Route::get('/', function () {
        return view('admin.page.index');
    })->name('admin');

    Route::resource('user', UserControler::class);

    Route::resource('layanan', LayananController::class);
});

Route::get('/', [EtiketController::class, 'index'])->name('index');

Route::get('detaillayanan/{slug}', [EtiketController::class, 'detail'])->name('detaillayanan');

Route::get('/daftar', function () {
    return view('daftar');
});

Route::post('/daftar', [UserControler::class, 'store'])->name('daftar.store');

Route::get('/profile', [EtiketController::class, 'profile'])->name('profile');
Route::put('/profile', [EtiketController::class, 'profileupdate'])->name('profile.update');

Route::get('/riwayat', [EtiketController::class, 'riwayat'])->name('riwayat');

// web.php
Route::post('/booking', [BokingController::class, 'store'])->name('booking.store');




Route::get('/telaga-ngebel', function () {
    return view('info');
})->name('info');

Route::get('/mloko-sewu', function () {
    return view('info2');
})->name('info2');


Route::get('/about', function () {
    return view('faqs');
})->name('faqs');

Route::get('/help', function () {
    return view('help');
})->name('help');
