<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;

class ExecutiveController extends Controller
{
    public function index()
    {
        $exprofile = DB::table('exprofiles')
            ->where('NIP', '6894001Z')
            ->select('*')
            ->first();
        // dd($exprofile);
        return view('exprofile', ['exprofile' => $exprofile]);
    }
    
}
