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

<<<<<<< HEAD
// Route::get('/keterangan', function () {
//     return view('keterangan');
// })->name('keterangan');
=======
// executive profile
Route::get('/executive/profile', 'ExecutiveController@index')->name('exprofile');
Route::get('/executive/profile/download', 'PdfGenerateController@download')->name('pdfDownload');
// end of executive profile

Route::get('/keterangan', function () {
    return view('keterangan');
})->name('keterangan');
>>>>>>> exp4
Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

<<<<<<< HEAD

Route::get('/executive/profile', 'ExecutiveController@index')->name('exprofile');
Route::get('/executive/profile/download', 'PdfGenerateController@download')->name('pdfDownload');

Route::get('/exprofile', function () {
    return view('exprofile');
})->name('exprofile');
=======
>>>>>>> exp4

Route::get('/keterangan','TampilRiwayatController@profile1')->name('keterangan');

Route::get('/formexprofile', function () {
    return view('formexprofile');
})->name('formexprofile');

Route::get('/upload', 'UploadController@index')->name('index');
Route::post('import', 'UploadController@import')->name('import');

<<<<<<< HEAD
// Route::get('/upload', 'StudentController@index')->name('index');
// Route::post('import', 'StudentController@import')->name('import');


=======
>>>>>>> exp4
