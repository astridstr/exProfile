<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;

class SuperadminController extends Controller
{
    public function index()
    {        
        // dd($exprofile);
        return view('superadmin.upload');
    }

    public function showMonitoring()
    {    

        $pegawai=DB::table('exprofiles')->get();
        return view('superadmin.monitoring.app', compact('pegawai'));
    }
}
