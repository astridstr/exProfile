<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Exprofile;


class TampilRiwayatController extends Controller
{
    public function profile1(Request $request)
    {
        $exprofile = DB::table('exprofiles')
            ->where('NIP', '6693081Z')
            ->select('*')
            ->first();
        //dd($exprofile); 
        //return ($user->Nama_Lengkap);    
        return view('keterangan', ['exprofile' => $exprofile]);
    }
}
