<?php

use Illuminate\Support\Facades\Route;
use  App\Http\Controllers\ProductController;
use Illuminate\Support\Facades\Auth;

Route::get('/', function () {
    return view('welcome');
});


Route::resource('products', ProductController::class);
Route::get('/carrito', [App\Http\Controllers\Product_userController::class, 'carrito'])->name('carrito');

Route::delete('/destroy/{id}', [App\Http\Controllers\Product_userController::class, 'destroy'])->name('destroyCarrito');
Route::get('/carritoAdd/{idProducto}', [App\Http\Controllers\Product_userController::class, 'Agregar_carrito'])->name('Agregar_carrito');


Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');


Auth::routes();