<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LoginController;

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

Route::post('/logout', [LoginController::class, 'logout'])->name('logout');

Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified',
])->group(function () {
    Route::get('/dashboard', function () {
        return view('ventas');
    })->name('dashboard');
    Route::get('/', function () {
        return view('ventas');
    })->name('dashboard');
    Route::get('/productos', function () {
        return view('productos');
    })->name('productos');
    Route::get('/consultar-ventas', function () {
        return view('consultar-ventas');
    })->name('consulventas');
});
