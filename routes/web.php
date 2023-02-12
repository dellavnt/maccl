<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PaketController;
use App\Http\Controllers\FranchiseeController;


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
    // manajemen franchisee
    Route::get('/franchisee', [FranchiseeController::class, 'index']);
    Route::get('/franchisee/form', [FranchiseeController::class, 'create']);
    Route::post('/franchisee', [FranchiseeController::class, 'store']);
    Route::get('/franchisee/edit/{id}', [FranchiseeController::class, 'edit']);
    Route::put('/franchisee/{id}', [FranchiseeController::class, 'update']);
    Route::delete('/franchisee/{id}', [FranchiseeController::class, 'destroy']);
    
    // manajemen paket
    Route::get('/paket', [PaketController::class, 'index']);
    Route::get('/paket/form', [PaketController::class, 'create']);
    Route::post('/paket', [PaketController::class, 'store']);
    Route::get('/paket/edit/{id}', [PaketController::class, 'edit']);
    Route::put('/paket/{id}', [PaketController::class, 'update']);
    Route::delete('/paket/{id}', [PaketController::class, 'destroy']);
    
});
