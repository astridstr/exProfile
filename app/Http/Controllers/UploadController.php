<?php
 
namespace App\Http\Controllers;
 
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use Session;
use Excel;
use File;
 
class UploadController extends Controller
{
    public function index()
    {
        return view('add-student');
    }
 
    public function import(Request $request){
        //validate the xls file
        $this->validate($request, array(
            'file'      => 'required'
        ));
 
        if($request->hasFile('file')){
            $extension = File::extension($request->file->getClientOriginalName());
            if ($extension == "xlsx" || $extension == "xls" || $extension == "csv") {
 
                $path = $request->file->getRealPath();
                $data = Excel::load($path, function($reader) {
                })->get();
                if(!empty($data) && $data->count()){

 
                    foreach ($data as $key => $value) {
                        $insert[] = [
                        'no' => $value->no,
                        'foto' => $value->foto,
			            'nama_lengkap'=> $value->nama_lengkap,
			            'nip'=> $value->nip,
			            'grade'=> $value->Grade,
			            'education_1'=> $value->education_1,
			            'education_1'=> $value->education_1,
			            'kota_lahir'=> $value->kota_lahir,
			            'tgl_lahir'=> $value->tgl_lahir,
			            'gender'=> $value->gender,
			            'religion'=> $value->religion,
			            'kota_domisili_utama'=> $value->kota_domisili_utama,
			            'email_korporat'=> $value->email_korporat,
			            'handphone'=> $value->handphone,
			            'sosmed_aktif'=> $value->sosmed_aktif,
			            'akun_sosmed_aktif_twitter_instagram_facebook'=> $value->akun_sosmed_aktif_twitter_instagram_facebook,
			            'jabatan_saat_ini'=> $value->jabatan_saat_ini,
			            'divisi_satuan' => $value->divisi_satuan,
			            'area_of_expertise_1' => $value->area_of_expertise_1,
			            'area_of_expertise_2' => $value->area_of_expertise_2,
			            'area_of_expertise_3' => $value->area_of_expertise_3,
			            'career_interest_1' => $value->career_interest_1,
			            'career_interest_2' => $value->career_interest_2,
			            'career_interest_3' => $value->career_interest_3,
			            'professional_certification_1' => $value->professional_certification_1,
			            'professional_certification_2' => $value->professional_certification_2,
			            'professional_certification_3' => $value->professional_certification_3,
			            'masterpiece_1' => $value->masterpiece_1,
			            'masterpiece_2' => $value->masterpiece_2,
			            'masterpiece_3' => $value->masterpiece_3,
			            'about_and_experience' => $value->about_and_experience,
			            ];
                    }
 
                    if(!empty($insert)){

 
                        $insertData = DB::table('exprofiles')->insert($insert);
                        if ($insertData) {
                            Session::flash('success', 'Your Data has successfully imported');
                        }else {                        
                            Session::flash('error', 'Error inserting the data..');
                            return back();
                        }
                    }
                }
 
                return back();
 
            }else {
                Session::flash('error', 'File is a '.$extension.' file.!! Please upload a valid xls/csv file..!!');
                return back();
            }
        }
    }
 
     
}
