<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;

class SuperadminController extends Controller
{
    public function index()
    {
        $exprofile = DB::table('exprofiles')
            ->where('NIP', '6894001Z')
            ->select('*')
            ->first();
        // dd($exprofile);
        return view('superadmin.upload', ['exprofile' => $exprofile]);
    }
}
