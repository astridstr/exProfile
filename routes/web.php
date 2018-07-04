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
    return view('riwayat');
})->name('riwayat');

Route::get('/keterangan', function () {
    return view('keterangan');
})->name('keterangan');
Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::get('/exprofile', function () {
    return view('exprofile');
})->name('exprofile');