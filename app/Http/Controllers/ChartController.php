<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ChartController extends Controller
{
    public function monitoringChart()
    {
    	$user = Auth::user();
        $exprofile = DB::table('exprofiles')
            ->where('NIP', $user->email)
            ->select('*')
            ->first();
        //dd($exprofile);

        $divisi = DB::table('divisi')
            ->select('nama_divisi')
            ->get();

        $interest = DB::table('interest')
            ->select('nama_interest')
            ->get();

        return view('superadmin.monitoring.app', ['exprofile' => $exprofile,'divisi' => $divisi, 'interest' => $interest] );

    }

    public function chart()
      {

        $result = Exprofile::select(DB::raw('left(Divisi_Satuan, 6) as list_kategori'), DB::raw('count(*) as total_kategori'))->groupBy('kategori_all')->get();    
        return response()->json($result);
      }
}
