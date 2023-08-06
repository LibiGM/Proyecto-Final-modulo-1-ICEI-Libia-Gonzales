<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProductoController;

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
    return view('welcome');
});

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::get('/bb', [App\Http\Controllers\HomeController::class, 'bb'])->name('bb');
Route::get('/productindex', [App\Http\Controllers\ProductoController::class, 'index'])->name('productindex');
//Route::get('/create', [App\Http\Controllers\ProductoController::class, 'create'])->name('create');

Route::resource('productos', ProductoController::class);
Auth::routes();
