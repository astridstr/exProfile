<?php

namespace App\Http\Controllers;

use App\Http\Requests;
use Illuminate\Http\Request;
use DB;
use PDF;
use Auth;

class PdfGenerateController extends Controller
{
    public function download()
    {
        $user = Auth::user();
        $exprofile = DB::table('exprofiles')
            ->where('NIP', $user->email)
            ->select('*')
            ->first(); 
        // dd($exprofile);
        PDF::setOptions(['dpi' => 150, "default_paper_size" => "a4", "default_font" => "verdana"]);
        $pdf = PDF::loadView('pdf.exprofile', ['exprofile' => $exprofile])->setPaper('a4', 'landscape');
        // return $pdf->download('ExecutiveProfile.pdf');
        return $pdf->stream();
    }
}
