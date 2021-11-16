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
    return view('inicio');
});

Route::get('/inicio', function () {
    return view('inicio');
});

Route::get('/generador_apa', function () {
    return view('generador_apa');
});

Route::get('/trabajos_en_espanol', function () {
    return view('trabajos_en_espanol');
});

Route::get('/ejemplo', function () {
    return view('ejemplo');
});

Route::get('/precio', function () {
    return view('precio');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
