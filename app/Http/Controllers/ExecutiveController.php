<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;

class ExecutiveController extends Controller
{
    public function index()
    {
        $exprofile = DB::table('exprofiles')
            ->where('NIP', '6795025 P')
            ->select('*')
            ->first();
        // dd($exprofile);
        return view('exprofile', ['exprofile' => $exprofile]);
    }
    
}
