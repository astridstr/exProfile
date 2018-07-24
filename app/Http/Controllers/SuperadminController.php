<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use PDF;
use File;
use Image;
use Response;
use Zipper;
use Illuminate\Contracts\View\View;
use Maatwebsite\Excel\Concerns\FromView;
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
        $total = array_column($chart1->toArray(), 'total');
        $kategori = array_column($chart1->toArray(), 'kategori');

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
        $kategori = array_column($chart3->toArray(), 'kategori');

        return view('superadmin.monitoring.app', compact('pegawai', 'total', 'kategori', 'jenjang', 'total_per_jenjang'));
    }

    public function showTable()
    {    

        $pegawai=DB::table('exprofiles')->get();
        return view('superadmin.monitoring.tablemonit', compact('pegawai'));
    }

    public function downloadpdf(Request $request)
    {
        $nipnya= $request->input('nippeg');
        $file_foto = $request->input('foto');
        $file_pdf = $request->input('pdf');
        //dd($file_foto);
        $exprofile = DB::table('exprofiles')
            ->where('NIP',$nipnya)
            ->select('*')
            ->first(); 
        //dd($exprofile);
        PDF::setOptions(['dpi' => 150, "default_paper_size" => "a4", "default_font" => "verdana"]);
        $pdf = PDF::loadView('pdf.exprofile', ['exprofile' => $exprofile])->setPaper('a4', 'landscape');

        if (!empty($file_foto) && !empty($file_pdf)) {
            if( File::exists(public_path('/fotoupload/' . $file_foto .'.jpeg' ))){
               $filepath = glob(public_path('/fotoupload/' . $file_foto .'.jpeg' ));
            }
            if( File::exists(public_path('/fotoupload/' . $file_foto .'.jpg' ))){
               $filepath = glob(public_path('/fotoupload/' . $file_foto .'.jpg'));
            }
            if( File::exists(public_path('/fotoupload/' . $file_foto .'.png' ))){
               $filepath = glob(public_path('/fotoupload/' . $file_foto .'.png' ));
            }
            if( File::exists(public_path('/fotoupload/' . $file_foto .'.JPEG' ))){
               $filepath = glob(public_path('/fotoupload/' . $file_foto .'.JPEG' ));
            }
            if( File::exists(public_path('/fotoupload/' . $file_foto .'.JPG' ))){
               $filepath = glob(public_path('/fotoupload/' . $file_foto .'.JPG' ));
            }
            if( File::exists(public_path('/fotoupload/' . $file_foto .'.PNG' ))){
               $filepath = glob(public_path('/fotoupload/' . $file_foto .'.PNG' ));
            }

            $pdf->save( public_path('/pdfxprofile/' . $file_foto. '.pdf' ));
            $filepdf = glob(public_path('/pdfxprofile/' . $file_pdf. '.pdf' ));

            if( File::exists(public_path('xprofile.zip'))){
               File::delete(public_path('xprofile.zip'));
            }

            $zip = Zipper::make('xprofile.zip');
            $zip->add($filepath);
            $zip->add($filepdf);
            $zip->close();

            return Response::download(public_path('xprofile.zip'));
        }
        else if(!empty($file_foto)){
           if( File::exists(public_path('/fotoupload/' . $file_foto .'.jpeg' ))){
               $filepath = public_path('/fotoupload/' . $file_foto .'.jpeg' );
            }
            if( File::exists(public_path('/fotoupload/' . $file_foto .'.jpg' ))){
               $filepath = public_path('/fotoupload/' . $file_foto .'.jpg' );
            }
            if( File::exists(public_path('/fotoupload/' . $file_foto .'.png' ))){
               $filepath = public_path('/fotoupload/' . $file_foto .'.png' );
            }
            if( File::exists(public_path('/fotoupload/' . $file_foto .'.JPEG' ))){
               $filepath = public_path('/fotoupload/' . $file_foto .'.JPEG' );
            }
            if( File::exists(public_path('/fotoupload/' . $file_foto .'.JPG' ))){
               $filepath = public_path('/fotoupload/' . $file_foto .'.JPG' );
            }
            if( File::exists(public_path('/fotoupload/' . $file_foto .'.PNG' ))){
               $filepath = public_path('/fotoupload/' . $file_foto .'.PNG' );
            }

            return Response::download($filepath); 
        }
        else{

            if( File::exists(public_path('/pdfxprofile/' . $file_pdf .'.pdf' ))){
                File::delete(public_path('/pdfxprofile/' . $file_pdf .'.pdf' ));
            }

            $pdf->save( public_path('/pdfxprofile/' . $file_pdf. '.pdf' ));
            $filepdf = public_path('/pdfxprofile/' . $file_pdf. '.pdf' );
            return Response::download($filepdf); 
        }
       // $pdf->stream('my.pdf',array('Attachment'=>0));
        
        
         // $pdf->stream('my.pdf',array('Attachment'=>0));
    }

    public function downloadlapor()
    {
        $exprofile = DB::table('exprofiles')
            ->select('*')
            ->get(); 
        // dd($exprofile);
        PDF::setOptions(['dpi' => 150, "default_paper_size" => "a4", "default_font" => "verdana"]);
        $pdf = PDF::loadView('superadmin.laporan', ['exprofile' => $exprofile])->setPaper('a4', 'potrait');
        // return $pdf->download('ExecutiveProfile.pdf');
        return $pdf->stream('my.pdf',array('Attachment'=>0));
    }

    public function downloadexcel(): View {

    // Execute the query used to retrieve the data. In this example
    // we're joining hypothetical users and exprofile tables, retrieving
    // the exprofile table's primary key, the user's first and last name, 
    // the user's e-mail address, the amount paid, and the payment
    // timestamp.

    $exprofile = DB::table('exprofiles')
            ->select('*')
            ->get(); 

    return view('superadmin.excel', ['exprofile' => $exprofile]);
    }
}
