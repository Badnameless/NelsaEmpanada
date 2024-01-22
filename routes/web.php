<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\CategoriaController;
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

Route::post('/logout', [LoginController::class, 'logout'])->name('logout');

Route::get('/create_categoria', [CategoriaController::class, 'Create'])->name('CreateCategoria');
Route::get('/create_producto', [ProductoController::class, 'product'])->name('CreateProducto');
Route::get('/destroy_producto/{id}', [ProductoController::class, 'destroy'])->name('DestroyProduct');
Route::get('/edit_producto/{id}', [ProductoController::class, 'edit'])->name('EditProducto');

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
    Route::get('/productos', [ProductoController::class, 'showProducts'])->name('showProductos');
    Route::get('/consultar-ventas', function () {
        return view('consultar-ventas');
    })->name('consulventas');
});
