<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use Auth;
use App\Exprofile;


class ExecutiveController extends Controller
{
    public function index()
    {
    	$user = Auth::user();
        $exprofile=Exprofile::where('NIP',$user->email)->first();
        // dd($exprofile);
        return view('pegawai.exprofile', ['exprofile' => $exprofile]);
    }
    
}
