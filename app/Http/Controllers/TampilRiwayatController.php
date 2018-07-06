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
            ->where('NIP', '6792085Z')
            ->select('*')
            ->first();
        //dd($exprofile); 
        //return ($exprofile);    
        return view('keterangan', ['exprofile' => $exprofile]);
    }
}
