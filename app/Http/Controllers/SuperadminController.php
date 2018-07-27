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
use App\Exports;
use Excel;
use Carbon\Carbon;

class SuperadminController extends Controller
{
    public function index()
    {        
        // dd($exprofile);
        return view('superadmin.upload');
    }

    public function showMonitoring()
    {    
        // CHART ALL -> Persentase total pegawai pada divisi satuan unit direktorat
        $chart_all = Exprofile::select(DB::raw('left(Divisi_Satuan, 6) as kategori_all'), DB::raw('count(*) as total_all'))->groupBy('kategori_all')->get();    
                    $total_all = array_column($chart_all->toArray(), 'total_all');
                    $kategori_all = array_column($chart_all->toArray(), 'kategori_all');
                    // dd($chart_all);

        $chart_all_full = Exprofile::select(DB::raw('left(Divisi_Satuan, 6) as kategori'), DB::raw('count(*) as total'))
                                ->whereNotNull('Foto')->whereNotNull('Education_1')->whereNotNull('Kota_Domisili_Utama')
                                ->whereNotNull('Alamat_Tinggal_Saat_Ini')->whereNotNull('handphone')->whereNotNull('Area_of_Expertise_1')
                                ->whereNotNull('Career_Interest_1')->whereNotNull('Professional_Certification_1')->whereNotNull('Masterpiece_1')
                                ->whereNotNull('About_and_Experience_1')->whereNotNull('About_and_Experience_2')->whereNotNull('About_and_Experience_3')
                                ->groupBy('kategori')->get();   
                            $total_all_full = array_column($chart_all_full->toArray(), 'total');

        // CHART ALL DIVISI
        $chart_all_divisi = Exprofile::select(DB::raw('Divisi_Satuan as list_divisi'), DB::raw('count(*) as total_all_divisi'))
                                ->groupBy('list_divisi')
                                ->get();    
                            $list_divisi = array_column($chart_all_divisi->toArray(), 'list_divisi');
                            $total_all_divisi = array_column($chart_all_divisi->toArray(), 'total_all_divisi');

        $chart_all_divisi_full = Exprofile::select(DB::raw('Divisi_Satuan as list_divisi_full'), DB::raw('count(*) as total_all_divisi_full'))
                                    ->whereNotNull('Foto')->whereNotNull('Education_1')->whereNotNull('Kota_Domisili_Utama')
                                    ->whereNotNull('Alamat_Tinggal_Saat_Ini')->whereNotNull('handphone')->whereNotNull('Area_of_Expertise_1')
                                    ->whereNotNull('Career_Interest_1')->whereNotNull('Professional_Certification_1')->whereNotNull('Masterpiece_1')
                                    ->whereNotNull('About_and_Experience_1')->whereNotNull('About_and_Experience_2')->whereNotNull('About_and_Experience_3')
                                    ->groupBy('list_divisi_full')->get();   
                            $total_all_divisi_full = array_column($chart_all_divisi_full->toArray(), 'total_all_divisi_full');

        // CHART ALL SATUAN
        $chart_all_satuan = Exprofile::select(DB::raw('Divisi_Satuan as list_satuan'), DB::raw('count(*) as total_all_satuan'))
                                ->groupBy('list_satuan')
                                ->where(DB::raw('left(Divisi_Satuan, 6)'),'=','satuan')
                                ->get();    
                            $list_satuan = array_column($chart_all_satuan->toArray(), 'list_satuan');
                            $total_all_satuan = array_column($chart_all_satuan->toArray(), 'total_all_satuan');

        $chart_all_satuan_full = Exprofile::select(DB::raw('Divisi_Satuan as list_satuan_full'), DB::raw('count(*) as total_all_satuan_full'))
                                    ->where(DB::raw('left(Divisi_Satuan, 6)'),'=','satuan')
                                    ->whereNotNull('Foto')->whereNotNull('Education_1')->whereNotNull('Kota_Domisili_Utama')
                                    ->whereNotNull('Alamat_Tinggal_Saat_Ini')->whereNotNull('handphone')->whereNotNull('Area_of_Expertise_1')
                                    ->whereNotNull('Career_Interest_1')->whereNotNull('Professional_Certification_1')->whereNotNull('Masterpiece_1')
                                    ->whereNotNull('About_and_Experience_1')->whereNotNull('About_and_Experience_2')->whereNotNull('About_and_Experience_3')
                                    ->groupBy('list_satuan_full')->get();   
                            $total_all_satuan_full = array_column($chart_all_satuan_full->toArray(), 'total_all_satuan_full');

        // CHART ALL JENJANG
        $chart_all_jenjang = Exprofile::select(DB::raw('Jenjang as list_jenjang'), DB::raw('count(*) as total_all_jenjang'))
                                ->groupBy('list_jenjang')
                                ->get();
                            $list_jenjang = array_column($chart_all_jenjang->toArray(), 'list_jenjang');
                            $total_all_jenjang = array_column($chart_all_jenjang->toArray(), 'total_all_jenjang');

        $chart_all_jenjang_full = Exprofile::select(DB::raw('Jenjang as list_jenjang_full'), DB::raw('count(*) as total_all_jenjang_full'))
                                    ->whereNotNull('Foto')->whereNotNull('Education_1')->whereNotNull('Kota_Domisili_Utama')
                                    ->whereNotNull('Alamat_Tinggal_Saat_Ini')->whereNotNull('handphone')->whereNotNull('Area_of_Expertise_1')
                                    ->whereNotNull('Career_Interest_1')->whereNotNull('Professional_Certification_1')->whereNotNull('Masterpiece_1')
                                    ->whereNotNull('About_and_Experience_1')->whereNotNull('About_and_Experience_2')->whereNotNull('About_and_Experience_3')
                                    ->groupBy('list_jenjang_full')->get();   
                            $total_all_jenjang_full = array_column($chart_all_jenjang_full->toArray(), 'total_all_jenjang_full');

        return view('superadmin.monitoring.app', compact('total_all','kategori_all','total_all_full','list_divisi','total_all_divisi','total_all_divisi_full','list_satuan','total_all_satuan','total_all_satuan_full','list_jenjang_full','list_jenjang','total_all_jenjang','total_all_jenjang_full','chart_all_divisi'));
    }

    public function filterUnit(Request $request) {
        $chart_all = Exprofile::select(DB::raw('left(Divisi_Satuan, 6) as kategori_all'), DB::raw('count(*) as total_all'))->groupBy('kategori_all')->get();    
                    $total_all = array_column($chart_all->toArray(), 'total_all');
                    $kategori_all = array_column($chart_all->toArray(), 'kategori_all');
                    // dd($chart_all);

        $chart_all_full = Exprofile::select(DB::raw('left(Divisi_Satuan, 6) as kategori'), DB::raw('count(*) as total'))
                                ->whereNotNull('Foto')->whereNotNull('Education_1')->whereNotNull('Kota_Domisili_Utama')
                                ->whereNotNull('Alamat_Tinggal_Saat_Ini')->whereNotNull('handphone')->whereNotNull('Area_of_Expertise_1')
                                ->whereNotNull('Career_Interest_1')->whereNotNull('Professional_Certification_1')->whereNotNull('Masterpiece_1')
                                ->whereNotNull('About_and_Experience_1')->whereNotNull('About_and_Experience_2')->whereNotNull('About_and_Experience_3')
                                ->groupBy('kategori')->get();   
                            $total_all_full = array_column($chart_all_full->toArray(), 'total');

        // CHART ALL DIVISI
        $chart_all_divisi = Exprofile::select(DB::raw('Divisi_Satuan as list_divisi'), DB::raw('count(*) as total_all_divisi'))
                                ->groupBy('list_divisi')
                                ->get();    
                            $list_divisi = array_column($chart_all_divisi->toArray(), 'list_divisi');
                            $total_all_divisi = array_column($chart_all_divisi->toArray(), 'total_all_divisi');

        $chart_all_divisi_full = Exprofile::select(DB::raw('Divisi_Satuan as list_divisi_full'), DB::raw('count(*) as total_all_divisi_full'))
                                    ->whereNotNull('Foto')->whereNotNull('Education_1')->whereNotNull('Kota_Domisili_Utama')
                                    ->whereNotNull('Alamat_Tinggal_Saat_Ini')->whereNotNull('handphone')->whereNotNull('Area_of_Expertise_1')
                                    ->whereNotNull('Career_Interest_1')->whereNotNull('Professional_Certification_1')->whereNotNull('Masterpiece_1')
                                    ->whereNotNull('About_and_Experience_1')->whereNotNull('About_and_Experience_2')->whereNotNull('About_and_Experience_3')
                                    ->groupBy('list_divisi_full')->get();   
                            $total_all_divisi_full = array_column($chart_all_divisi_full->toArray(), 'total_all_divisi_full');

        // CHART ALL SATUAN
        $chart_all_satuan = Exprofile::select(DB::raw('Divisi_Satuan as list_satuan'), DB::raw('count(*) as total_all_satuan'))
                                ->groupBy('list_satuan')
                                ->where(DB::raw('left(Divisi_Satuan, 6)'),'=','satuan')
                                ->get();    
                            $list_satuan = array_column($chart_all_satuan->toArray(), 'list_satuan');
                            $total_all_satuan = array_column($chart_all_satuan->toArray(), 'total_all_satuan');

        $chart_all_satuan_full = Exprofile::select(DB::raw('Divisi_Satuan as list_satuan_full'), DB::raw('count(*) as total_all_satuan_full'))
                                    ->where(DB::raw('left(Divisi_Satuan, 6)'),'=','satuan')
                                    ->whereNotNull('Foto')->whereNotNull('Education_1')->whereNotNull('Kota_Domisili_Utama')
                                    ->whereNotNull('Alamat_Tinggal_Saat_Ini')->whereNotNull('handphone')->whereNotNull('Area_of_Expertise_1')
                                    ->whereNotNull('Career_Interest_1')->whereNotNull('Professional_Certification_1')->whereNotNull('Masterpiece_1')
                                    ->whereNotNull('About_and_Experience_1')->whereNotNull('About_and_Experience_2')->whereNotNull('About_and_Experience_3')
                                    ->groupBy('list_satuan_full')->get();   
                            $total_all_satuan_full = array_column($chart_all_satuan_full->toArray(), 'total_all_satuan_full');

        // CHART ALL JENJANG
        $unit = $request->unit;
        if ($unit == 'all') {
            $chart_all_jenjang = Exprofile::select(DB::raw('Jenjang as list_jenjang'), DB::raw('count(*) as total_all_jenjang'))
                                    ->groupBy('list_jenjang')
                                    ->get();
                        $list_jenjang = array_column($chart_all_jenjang->toArray(), 'list_jenjang');
                        $total_all_jenjang = array_column($chart_all_jenjang->toArray(), 'total_all_jenjang');

            $chart_all_jenjang_full = Exprofile::select(DB::raw('Jenjang as list_jenjang_full'), DB::raw('count(*) as total_all_jenjang_full'))
                                        ->whereNotNull('Foto')->whereNotNull('Education_1')->whereNotNull('Kota_Domisili_Utama')
                                        ->whereNotNull('Alamat_Tinggal_Saat_Ini')->whereNotNull('handphone')->whereNotNull('Area_of_Expertise_1')
                                        ->whereNotNull('Career_Interest_1')->whereNotNull('Professional_Certification_1')->whereNotNull('Masterpiece_1')
                                        ->whereNotNull('About_and_Experience_1')->whereNotNull('About_and_Experience_2')->whereNotNull('About_and_Experience_3')
                                        ->where('Divisi_Satuan', $unit)
                                        ->groupBy('list_jenjang_full')->get();   
                        $total_all_jenjang_full = array_column($chart_all_jenjang_full->toArray(), 'total_all_jenjang_full');
        } elseif ($unit != 'all') {
            $chart_all_jenjang = Exprofile::select(DB::raw('Jenjang as list_jenjang'), DB::raw('count(*) as total_all_jenjang'))
                                    ->where('Divisi_Satuan', $unit)
                                    ->groupBy('list_jenjang')
                                    ->get();
                        $list_jenjang = array_column($chart_all_jenjang->toArray(), 'list_jenjang');
                        $total_all_jenjang = array_column($chart_all_jenjang->toArray(), 'total_all_jenjang');

            $chart_all_jenjang_full = Exprofile::select(DB::raw('Jenjang as list_jenjang_full'), DB::raw('count(*) as total_all_jenjang_full'))
                                        ->whereNotNull('Foto')->whereNotNull('Education_1')->whereNotNull('Kota_Domisili_Utama')
                                        ->whereNotNull('Alamat_Tinggal_Saat_Ini')->whereNotNull('handphone')->whereNotNull('Area_of_Expertise_1')
                                        ->whereNotNull('Career_Interest_1')->whereNotNull('Professional_Certification_1')->whereNotNull('Masterpiece_1')
                                        ->whereNotNull('About_and_Experience_1')->whereNotNull('About_and_Experience_2')->whereNotNull('About_and_Experience_3')
                                        ->groupBy('list_jenjang_full')->get();   
                        $total_all_jenjang_full = array_column($chart_all_jenjang_full->toArray(), 'total_all_jenjang_full');
        } elseif (empty($unit)) {
            $chart_all_jenjang = Exprofile::select(DB::raw('Jenjang as list_jenjang'), DB::raw('count(*) as total_all_jenjang'))
                                    ->groupBy('list_jenjang')
                                    ->get();
                        $list_jenjang = array_column($chart_all_jenjang->toArray(), 'list_jenjang');
                        $total_all_jenjang = array_column($chart_all_jenjang->toArray(), 'total_all_jenjang');

            $chart_all_jenjang_full = Exprofile::select(DB::raw('Jenjang as list_jenjang_full'), DB::raw('count(*) as total_all_jenjang_full'))
                                        ->whereNotNull('Foto')->whereNotNull('Education_1')->whereNotNull('Kota_Domisili_Utama')
                                        ->whereNotNull('Alamat_Tinggal_Saat_Ini')->whereNotNull('handphone')->whereNotNull('Area_of_Expertise_1')
                                        ->whereNotNull('Career_Interest_1')->whereNotNull('Professional_Certification_1')->whereNotNull('Masterpiece_1')
                                        ->whereNotNull('About_and_Experience_1')->whereNotNull('About_and_Experience_2')->whereNotNull('About_and_Experience_3')
                                        ->groupBy('list_jenjang_full')->get();   
                        $total_all_jenjang_full = array_column($chart_all_jenjang_full->toArray(), 'total_all_jenjang_full');
        }

        return view('superadmin.monitoring.app', compact('total_all','kategori_all','total_all_full','list_divisi','total_all_divisi','total_all_divisi_full','list_satuan','total_all_satuan','total_all_satuan_full','list_jenjang_full','list_jenjang','total_all_jenjang','total_all_jenjang_full','chart_all_divisi'));
    }

    public function showTable()
    {    
        $divisi = DB::table('divisi')
            ->select('*')
            ->get();

        $unit='all';

        $pegawai=DB::table('exprofiles')
                    ->whereNotNull('Foto')
                    ->whereNotNull('Education_1')
                    ->whereNotNull('Kota_Domisili_Utama')
                    ->whereNotNull('Alamat_Tinggal_Saat_Ini')
                    ->whereNotNull('handphone')
                    ->whereNotNull('Area_of_Expertise_1')
                    ->whereNotNull('Career_Interest_1')
                    ->whereNotNull('Professional_Certification_1')
                    ->whereNotNull('Masterpiece_1')
                    ->whereNotNull('About_and_Experience_1')
                    ->whereNotNull('About_and_Experience_2')
                    ->whereNotNull('About_and_Experience_3')
                    ->get();
        $pegawainip=DB::table('exprofiles')
                    ->whereNotNull('Foto')
                    ->whereNotNull('Education_1')
                    ->whereNotNull('Kota_Domisili_Utama')
                    ->whereNotNull('Alamat_Tinggal_Saat_Ini')
                    ->whereNotNull('handphone')
                    ->whereNotNull('Area_of_Expertise_1')
                    ->whereNotNull('Career_Interest_1')
                    ->whereNotNull('Professional_Certification_1')
                    ->whereNotNull('Masterpiece_1')
                    ->whereNotNull('About_and_Experience_1')
                    ->whereNotNull('About_and_Experience_2')
                    ->whereNotNull('About_and_Experience_3')
                    ->select('NIP')
                    ->get();
        $pegawai2 = DB::table('exprofiles')
                    ->whereNotIn('NIP', $pegawainip)->get();
       
        return view('superadmin.monitoring.tablemonit', ['pegawai' => $pegawai,'pegawai2' => $pegawai2, 'divisi' => $divisi ,'unit' => $unit]);
    }

    public function downloadpdf(Request $request)
    {
        $nipnya= $request->input('nippeg');
        $hai = $request->all();
        $file_fotoku = $request->input('foto');
        $file_foto = $file_fotoku[0];
        $file_pdfku = $request->input('pdf');
        $file_pdf = $file_pdfku[0];
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

            if( File::exists(public_path($file_foto.'.zip'))){
               File::delete(public_path($file_foto.'.zip'));
            }

            $zip = Zipper::make($file_foto.'.zip');
            $zip->add($filepath);
            $zip->add($filepdf);
            $zip->close();

            return Response::download(public_path($file_foto.'.zip'));
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

    public function downloadexcel(Request $request) {

    $unit= $request->input('unit');

    if($unit == 'all'){
        $exprofile=Exprofile::get();
        $filename = 'EP_All_Pegawai_'.Carbon::now('Asia/Jakarta');
    }
    else{
        $exprofile=Exprofile::where('Divisi_Satuan',$unit)->get();
        $filename = 'EP_'.$unit.Carbon::now('Asia/Jakarta');
    }
    $type = 'xls';


    Excel::create($filename, function($excel) use($exprofile) {
            $excel->sheet('Data Rekap', function($sheet) use($exprofile) {
                $sheet->loadView('superadmin.excel', ['exprofile' => $exprofile]);
                $sheet->getStyle('B:J')->getAlignment()->setWrapText(true);
                $sheet->cell('A1:J1', function($cell) { 
                    $cell->setFontSize(10);
                });
            });

            $excel->sheet('Data Lengkap', function($sheet) use ($exprofile)

            {

                $sheet->fromArray($exprofile);

            });
        })->download('xlsx');
    }

    public function downloadfotoall() {

        $filepath = glob(public_path('/fotoupload/*'));

        if( File::exists(public_path('xprofile.zip'))){
               File::delete(public_path('xprofile.zip'));
            }

        $zip = Zipper::make('xprofile.zip');
        $zip->add($filepath);
        $zip->close();

        return Response::download(public_path('xprofile.zip'));
    }

    public function downloadpdfall(){

        $exprofile = DB::table('exprofiles')
            ->select('File_Foto')
            ->get(); 


        foreach($exprofile as $exprof){
            $file_pdf = $exprof->File_Foto;

            $exprofile = DB::table('exprofiles')
            ->where('File_Foto',$file_pdf)
            ->select('*')
            ->first(); 

            //dd($exprofile);
            PDF::setOptions(['dpi' => 150, "default_paper_size" => "a4", "default_font" => "verdana"]);
            $pdf = PDF::loadView('pdf.exprofile', ['exprofile' => $exprofile])->setPaper('a4', 'landscape');

            if( File::exists(public_path('/pdfxprofile/' . $file_pdf .'.pdf' ))){
                File::delete(public_path('/pdfxprofile/' . $file_pdf .'.pdf' ));
                }

            $pdf->save( public_path('/pdfxprofile/' . $file_pdf. '.pdf' ));
            $filepdf = public_path('/pdfxprofile/' . $file_pdf. '.pdf' );
        }

        $filepath = glob(public_path('/pdfxprofile/*'));

        if( File::exists(public_path('EP_All_Pegawai_PDF.zip'))){
               File::delete(public_path('EP_All_Pegawai_PDF.zip'));
            }

        $zip = Zipper::make('EP_All_Pegawai_PDF.zip');
        $zip->add($filepath);
        $zip->close();

        return Response::download(public_path('xprofile.zip'));

    }

    public function showfilter(Request $request){

        $divisi = DB::table('divisi')
            ->select('*')
            ->get();

        $unit= $request->input('unit');
        if($unit == 'all'){
            return $this->showTable();
        }

        $pegawai=DB::table('exprofiles')
                    ->whereNotNull('Foto')
                    ->whereNotNull('Education_1')
                    ->whereNotNull('Kota_Domisili_Utama')
                    ->whereNotNull('Alamat_Tinggal_Saat_Ini')
                    ->whereNotNull('handphone')
                    ->whereNotNull('Area_of_Expertise_1')
                    ->whereNotNull('Career_Interest_1')
                    ->whereNotNull('Professional_Certification_1')
                    ->whereNotNull('Masterpiece_1')
                    ->whereNotNull('About_and_Experience_1')
                    ->whereNotNull('About_and_Experience_2')
                    ->whereNotNull('About_and_Experience_3')
                    ->where('Divisi_Satuan',$unit)
                    ->get();
        $pegawainip=DB::table('exprofiles')
                    ->whereNotNull('Foto')
                    ->whereNotNull('Education_1')
                    ->whereNotNull('Kota_Domisili_Utama')
                    ->whereNotNull('Alamat_Tinggal_Saat_Ini')
                    ->whereNotNull('handphone')
                    ->whereNotNull('Area_of_Expertise_1')
                    ->whereNotNull('Career_Interest_1')
                    ->whereNotNull('Professional_Certification_1')
                    ->whereNotNull('Masterpiece_1')
                    ->whereNotNull('About_and_Experience_1')
                    ->whereNotNull('About_and_Experience_2')
                    ->whereNotNull('About_and_Experience_3')
                    ->select('NIP')
                    ->get();
        $pegawai2 = DB::table('exprofiles')
                    ->whereNotIn('NIP', $pegawainip)
                    ->where('Divisi_Satuan',$unit)
                    ->get();
       
        return view('superadmin.monitoring.tablemonit', ['pegawai' => $pegawai,'pegawai2' => $pegawai2, 'divisi' => $divisi, 'unit' => $unit]);
    }
}
