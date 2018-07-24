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
