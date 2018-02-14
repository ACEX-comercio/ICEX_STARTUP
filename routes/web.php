<?php

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
    return view('welcome');
});
Route::get('/inteligencia', function () {
    return view('layouts.inteligencia');
});
Route::get('/analisis', function () {
    return view('layouts.analisis');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
