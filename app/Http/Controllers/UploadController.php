<?php
 
namespace App\Http\Controllers;
 
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Http\Request;
use Session;
use Excel;
use File;
 
class UploadController extends Controller
{
    public function index()
    {
        return view('superadmin.upload');
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
                        'foto' => $value->foto,
                        'file_foto' => $value->file_foto,
			            'nama_lengkap'=> $value->nama_lengkap,
			            'nip'=> $value->nip,
			            'grade'=> $value->grade,
                        'jenjang'=> $value->jenjang,
			            'education_1'=> $value->education_1,
			            'education_2'=> $value->education_2,
			            'kota_lahir'=> $value->kota_lahir,
			            'tgl_lahir'=> $value->tgl_lahir,
			            'gender'=> $value->gender,
			            'religion'=> $value->religion,
			            'kota_domisili_utama'=> $value->kota_domisili_utama,
                        'alamat_tinggal_saat_ini' => $value->alamat_tinggal_saat_ini,
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
			            'about_and_experience_1' => $value->about_and_experience_1,
                        'about_and_experience_2' => $value->about_and_experience_2,
                        'about_and_experience_3' => $value->about_and_experience_3,
			            ];
                    }

                    foreach ($data as $key => $value) {
                        return User::create([
                            'nip' => $data['nip'],
                            'password' => Hash::make($data['password']),
                        ]);
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
