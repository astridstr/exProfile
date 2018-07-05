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
        $user = Exprofile::where('kota_lahir','PADANG')->first(); 
        //dd($user); 
        //return ($user);    
        return view('riwayat', ['user' => $user]);
    }
}
