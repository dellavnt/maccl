<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PemesanansController;

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

Route::get('/', function () {
    return view('layouts.master');
})->middleware('auth');

Route::get('/login', function () {
    return view('layouts.login');
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::middleware('auth')->group(function () {
    // manajemen pemesanan
    Route::get('/pemesanan', [PemesanansController::class, 'index']);
    Route::get('/pemesanan/form', [PemesanansController::class, 'create']);
    Route::post('/pemesanan', [PemesanansController::class, 'store']);
    Route::get('/pemesanan/edit/{id}', [PemesanansController::class, 'edit']);
    Route::put('/pemesanan/{id}', [PemesanansController::class, 'update']);
    Route::delete('/pemesanan/{id}', [JurusanController::class, 'destroy']);
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
