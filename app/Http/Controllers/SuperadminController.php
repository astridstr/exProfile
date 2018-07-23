<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use App\Exprofile;
use App\Monitoring;
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
        $listMA = Exprofile::where('Jenjang', 'Manajemen Atas')->select('id')->get();       $countMA = $listMA->count();
        $listMM = Exprofile::where('Jenjang', 'Manajemen Menengah')->select('id')->get();   $countMM = $listMM->count();
        $listMD = Exprofile::where('Jenjang', 'Manajemen Dasar')->select('id')->get();      $countMD = $listMD->count();
        $listSPVA = Exprofile::where('Jenjang', 'Supervisori Atas')->select('id')->get();   $countSPVA = $listSPVA->count();
        $listSPVD = Exprofile::where('Jenjang', 'Supervisori Dasar')->select('id')->get();  $countSPVD = $listSPVD->count();
        $listF1 = Exprofile::where('Jenjang', 'Fungsional 1')->select('id')->get();         $countF1 = $listF1->count();
        $listF2 = Exprofile::where('Jenjang', 'Fungsional 2')->select('id')->get();         $countF2 = $listF2->count();
        $listF3 = Exprofile::where('Jenjang', 'Fungsional 3')->select('id')->get();         $countF3 = $listF3->count();
        $listF4 = Exprofile::where('Jenjang', 'Fungsional 4')->select('id')->get();         $countF4 = $listF4->count();
        $listF5 = Exprofile::where('Jenjang', 'Fungsional 5')->select('id')->get();         $countF5 = $listF5->count();
        $listF6 = Exprofile::where('Jenjang', 'Fungsional 6')->select('id')->get();         $countF6 = $listF6->count();

        $countUnt = Exprofile::where(DB::raw('left(Divisi_Satuan, 6)'),'!=','divisi')->where(DB::raw('left(Divisi_Satuan, 6)'),'!=','satuan')->where(DB::raw('left(Divisi_Satuan, 6)'),'!=','direktorat')->count();

        // query -> menampilkan jumlah pegawai dari masing-masing divisi, satuan, direktorat, dan unit (ALL)
        $chart1 = Exprofile::select(DB::raw('left(Divisi_Satuan, 6) as kategori'), DB::raw('count(*) as total'))
            ->groupBy('kategori')
            ->get();    
        $total_all = array_column($chart1->toArray(), 'total');
        // dd($total_all);
        $kategori = array_column($chart1->toArray(), 'kategori');
        // dd($kategori);

        //query -> menampilkan jumlah pegawai dari tiap jenjang MA, MM, MD, SPVA, SPVD, F!-6
        $chart2 = Exprofile::select(DB::raw('Jenjang as jenjang'), DB::raw('count(*) as total_per_jenjang'))->groupBy('jenjang')->get();
        $jenjang = array_column($chart2->toArray(), 'jenjang');
        $total_per_jenjang = array_column($chart2->toArray(), 'total_per_jenjang');

        // query -> menampilkan jumlah pegawai dari masing-masing divisi, satuan, direktorat, dan unit (ALL)
        $chart3 = Exprofile::select(DB::raw('Divisi_Satuan as dsu'), DB::raw('count(*) as total'))
            ->where(DB::raw('left(Divisi_Satuan, 6)'),'!=','divisi')
            ->groupBy('dsu')
            ->get();    

        $total = array_column($chart3->toArray(), 'total');
        $kategori3 = array_column($chart3->toArray(), 'kategori3');

        return view('superadmin.monitoring.app', compact('pegawai', 'total_all', 'kategori', 'jenjang', 'total_per_jenjang'));
    }
}
