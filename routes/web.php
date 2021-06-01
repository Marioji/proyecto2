<?php

use Illuminate\Support\Facades\Route;

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
    return view('index');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth'])->name('dashboard');

Route::get('/clientes', function () {
    return view('clientes');
})->middleware(['auth'])->name('clientes');

Route::get('/clientes/crear', function () {
    return view('crear_cliente');
})->middleware(['auth'])->name('crear_cliente');

require __DIR__.'/auth.php';
