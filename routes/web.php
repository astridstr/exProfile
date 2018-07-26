<?php

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::get('/', function () {
	if(Auth::check()) {    
        $user = Auth::user();
        $userrole = DB::table('role_user')
                    ->where('user_id', $user->id)
                    ->select('role_id')
                    ->first();
        // dd($userrole);
        if ( $userrole->role_id == '1' ) {
               return redirect()->route('superadmin.monitoring');
        }
        elseif ( $userrole->role_id == '2' ) {
               return redirect()->route('plnpusat.dashboard');
        }
        elseif ( $userrole->role_id == '3' ) {
               return redirect()->route('unit.dashboard');
        }
        elseif ( $userrole->role_id == '4' ) {
               return redirect()->route('pegawai.dashboard');
        }     
        return view('home'); 
    }
    return view('auth.login');
})->name('index');

// Superadmin Route
Route::group(['prefix' => '1', 'middleware' => ['auth', 'role:superadmin']], function(){
    Route::get('/dashboard', 'SuperadminController@index')->name('superadmin.dashboard');    
    Route::get('/monitoring', 'SuperadminController@showMonitoring')->name('superadmin.monitoring');
    Route::get('/monit/table', 'SuperadminController@showTable')->name('mytable');
    Route::post('/monittable', 'SuperadminController@downloadpdf')->name('monittable');
	Route::get('/upload', 'UploadController@index')->name('upload');
	Route::post('import', 'UploadController@import')->name('import');
    Route::get('/laporan/download', 'SuperadminController@downloadlapor')->name('laporDownload');
    Route::get('/downloadExcel', 'SuperadminController@downloadexcel')->name('excelDownload');

    Route::post('/filter-unit', 'SuperadminController@filterUnit')->name('filter.unit');

    Route::get('/downloadFotoAll', 'SuperadminController@downloadfotoall')->name('fotoallDownload');
    Route::get('/downloadPdfAll', 'SuperadminController@downloadpdfall')->name('pdfallDownload');

    Route::post('/showfilter', 'SuperadminController@showfilter')->name('showfilter');
});


// Superadmin Route
Route::group(['prefix' => '2', 'middleware' => ['auth', 'role:plnpusat']], function(){
    Route::get('/dashboard', 'SuperadminController@index')->name('plnpusat.dashboard');
});

// Unit Route
Route::group(['prefix' => '3', 'middleware' => ['auth', 'role:unit']], function(){
    Route::get('/dashboard', 'UnitController@index')->name('unit.dashboard');
    Route::get('/upload', 'UploadController@index')->name('unit.upload');
    Route::post('import', 'UploadController@import')->name('unit.import');


});

// Superadmin Route
Route::group(['prefix' => '4', 'middleware' => ['auth', 'role:pegawai']], function(){
    Route::get('/dashboard', 'ExecutiveController@index')->name('pegawai.dashboard');
    Route::post('/form/exprofile/v1','FormController@formeditdiri')->name('formeditdiri');
    Route::get('/form/exprofile/v1','FormController@formview')->name('form.view');
    Route::post('/form/exprofile/v1edu','FormController@formeditedu')->name('formeditedu');
    Route::post('/form/exprofile/v1career','FormController@formeditcareer')->name('formeditcareer');
    Route::post('/form/exprofile/v1master','FormController@formeditmaster')->name('formeditmaster');
    Route::get('/profile/download', 'PdfGenerateController@download')->name('pdfDownload');
});


// Route::get('/riwayat', function () {
//     return view('riwayat');
// })->name('riwayat');
Route::get('/formexprofile', function () {
    return view('formexprofile');
})->name('formexprofile');


// executive profile

// end of executive profile

Route::get('/keterangan','TampilRiwayatController@profile1')->name('keterangan');


