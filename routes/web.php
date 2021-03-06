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
               return redirect()->route('superadmin.dashboard');
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
    Route::get('/dashboard', 'SuperadminController@showMonitoring')->name('superadmin.dashboard');    
    Route::get('/monitoring', 'SuperadminController@showMonitoring')->name('monitoring');
    Route::get('/upload', 'UploadController@index')->name('upload');
    Route::post('import', 'UploadController@import')->name('import');
    Route::get('/monit/table', 'SuperadminController@showTable')->name('mytable');
    Route::post('/monittable', 'SuperadminController@downloadpdf')->name('monittable');
    Route::get('/laporan/download', 'SuperadminController@downloadlapor')->name('laporDownload');
    Route::post('/downloadExcel', 'SuperadminController@downloadexcel')->name('excelDownload');
    Route::post('/filter-unit', 'SuperadminController@filterUnit')->name('filter.unit');
    Route::get('/downloadFotoAll', 'SuperadminController@downloadfotoall')->name('fotoallDownload');
    Route::get('/downloadPdfAll', 'SuperadminController@downloadpdfall')->name('pdfallDownload');
    Route::post('/showfilter', 'SuperadminController@showfilter')->name('showfilter');
});


// Superadmin Route
Route::group(['prefix' => '2', 'middleware' => ['auth', 'role:plnpusat']], function(){
    Route::get('/dashboard', 'SuperadminController@index')->name('plnpusat.dashboard');
});

// Superadmin Route
Route::group(['prefix' => '3', 'middleware' => ['auth', 'role:unit']], function(){
   Route::get('/dashboard', 'UnitController@showMonitoring')->name('unit.dashboard'); 
   Route::get('/monit/table', 'UnitController@showTable')->name('unit.mytable');
   Route::post('/monittable', 'UnitController@downloadpdf')->name('unit.monittable');
   Route::get('/laporan/download', 'UnitController@downloadlapor')->name('unit.laporDownload');
   Route::post('/downloadExcel', 'UnitController@downloadexcel')->name('unit.excelDownload');
   Route::get('/downloadFotoAll', 'UnitController@downloadfotoall')->name('unit.fotoallDownload');
   Route::get('/downloadPdfAll', 'UnitController@downloadpdfall')->name('unit.pdfallDownload');
   Route::post('/showfilter', 'SuperadminController@showfilter')->name('unit.showfilter');
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


