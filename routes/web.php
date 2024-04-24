<?php

use Illuminate\Support\Facades\Route;

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

Route::get('/Principal', function () {
    return view('Principal');
})->name('Principal');

Route::get('/Servicios', function () {
    return view('Servicios/Servicios');
})->name('Servicios');

route::get('/Info-Servicios', function (){
    return view('Servicios/ClickServicios');
})->name('ClickServicios');
