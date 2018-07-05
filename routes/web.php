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

// Route::get('/keterangan', function () {
//     return view('keterangan');
// })->name('keterangan');
Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');


Route::get('/executive/profile', 'ExecutiveController@index')->name('exprofile');
Route::get('/executive/profile/download', 'PdfGenerateController@download')->name('pdfDownload');

Route::get('/exprofile', function () {
    return view('exprofile');
})->name('exprofile');

Route::get('/keterangan','TampilRiwayatController@profile1')->name('keterangan');

Route::get('/formexprofile', function () {
    return view('formexprofile');
})->name('formexprofile');

Route::get('/upload', 'UploadController@index')->name('index');
Route::post('import', 'UploadController@import')->name('import');

// Route::get('/upload', 'StudentController@index')->name('index');
// Route::post('import', 'StudentController@import')->name('import');


