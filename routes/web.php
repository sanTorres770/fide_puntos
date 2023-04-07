<?php

use Illuminate\Support\Facades\Route;


Route::view('/','index')->name('index');

Route::get('/productos/lista',[\App\Http\Controllers\ProductosController::class,'lista'])->name('productos.lista');
Route::get('/productos/detalle/{producto}',[\App\Http\Controllers\ProductosController::class,'detalle'])->name('productos.detalle');
Route::post('/productos/canjear',[\App\Http\Controllers\ProductosController::class,'guardarCanje'])->name('productos.guardar_canje');
Route::get('/login',function (){
    return 'login';
})->name('login');
Route::view('/login','auth.login')->name('login');
Route::view('/registro','auth.registro')->name('registro');
Route::post('/registro',[\App\Http\Controllers\Auth\RegisteredUserController::class,'registro'])->name('registrar');
Route::post('/login',[\App\Http\Controllers\AuthenticatedSessionController::class,'login'])->name('loguear');
