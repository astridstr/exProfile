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
    return view('home');
})->name('index');

// Superadmin Route
Route::group(['prefix' => '1', 'middleware' => ['auth', 'role:superadmin']], function(){
    Route::get('/dashboard', 'SuperadminController@index')->name('superadmin.dashboard');
	Route::get('/upload', 'UploadController@index')->name('upload');
	Route::post('import', 'UploadController@import')->name('import');
});


// Superadmin Route
Route::group(['prefix' => '2', 'middleware' => ['auth', 'role:plnpusat']], function(){
    Route::get('/dashboard', 'SuperadminController@index')->name('plnpusat.dashboard');
});

// Superadmin Route
Route::group(['prefix' => '3', 'middleware' => ['auth', 'role:unit']], function(){
    Route::get('/dashboard', 'SuperadminController@index')->name('unit.dashboard');
});

// Superadmin Route
Route::group(['prefix' => '4', 'middleware' => ['auth', 'role:pegawai']], function(){
    Route::get('/dashboard', 'ExecutiveController@index')->name('pegawai.dashboard');
    
});


Route::get('/riwayat', function () {
    return view('riwayat');
})->name('riwayat');


// executive profile
Route::get('/executive/profile', 'ExecutiveController@index')->name('exprofile');
Route::get('/executive/profile/download', 'PdfGenerateController@download')->name('pdfDownload');
// end of executive profile



Route::get('/keterangan','TampilRiwayatController@profile1')->name('keterangan');

Route::get('/formexprofile', function () {
    return view('formexprofile');
})->name('formexprofile');


Route::get('/formexprofilev1', function () {
    return view('formexprofilev1');
})->name('formexprofilev1');

Route::post('/formexprofilev1','FormController@formeditdiri')->name('formeditdiri');
Route::get('/formexprofilev1','FormController@formview')->name('formview');