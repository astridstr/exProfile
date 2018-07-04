<?php

namespace App\Http\Controllers;

use App\Http\Requests;
use Illuminate\Http\Request;
use DB;
use PDF;

class PdfGenerateController extends Controller
{
    public function download()
    {
        // $nota = DB::table('transaksi')
        // ->join('nasabah', 'nasabah.no_rekening', '=', 'transaksi.no_rekening')
        // ->where('transaksi.id_transaksi', $id_transaksi)
        // ->select('transaksi.*', 'nasabah.nama_nasabah')
        // ->get(); 
        PDF::setOptions(['dpi' => 150, "default_paper_size" => "a4", "default_font" => "verdana"]);
        $pdf = PDF::loadView('pdf.exprofile')->setPaper('a4', 'landscape');
        // return $pdf->download('ExecutiveProfile.pdf');
        return $pdf->stream();
    }
}
