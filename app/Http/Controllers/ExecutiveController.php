<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use Auth;

class ExecutiveController extends Controller
{
    public function index()
    {
    	$user = Auth::user();
        $exprofile = DB::table('exprofiles')
            ->where('NIP', $user->email)
            ->select('*')
            ->first();
        // dd($exprofile);
        return view('pegawai.exprofile', ['exprofile' => $exprofile]);
    }
    
}
