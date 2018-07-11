<?php
 
namespace App\Http\Controllers;
 
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Http\Request;
use Session;
use Excel;
use File;
use App\User;
use App\UserRole;
use App\Exprofile;
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
                        
                        $insert = Exprofile::create([
                        'Foto' => $value->foto,
                        'File_Foto' => $value->file_foto,
                        'Nama_Lengkap'=> $value->nama_lengkap,
                        'NIP'=> $value->nip,
                        'Grade'=> $value->grade,
                        'Jenjang'=> $value->jenjang,
                        'Education_1'=> $value->education_1,
                        'Education_2'=> $value->education_2,
                        'Kota_Lahir'=> $value->kota_lahir,
                        'tgl_lahir'=> $value->tgl_lahir,
                        'Gender'=> $value->gender,
                        'Religion'=> $value->religion,
                        'Kota_Domisili_Utama'=> $value->kota_domisili_utama,
                        'Alamat_Tinggal_Saat_Ini' => $value->alamat_tinggal_saat_ini,
                        'email_korporat'=> $value->email_korporat,
                        'handphone'=> $value->handphone,
                        'Sosmed_Aktif'=> $value->sosmed_aktif,
                        'akun_sosmed_aktif_twitter_instagram_facebook'=> $value->akun_sosmed_aktif_twitter_instagram_facebook,
                        'Jabatan_Saat_ini'=> $value->jabatan_saat_ini,
                        'Divisi_Satuan' => $value->divisi_satuan,
                        'Area_of_Expertise_1' => $value->area_of_expertise_1,
                        'Area_of_Expertise_2' => $value->area_of_expertise_2,
                        'Area_of_Expertise_3' => $value->area_of_expertise_3,
                        'Career_Interest_1' => $value->career_interest_1,
                        'Career_Interest_2' => $value->career_interest_2,
                        'Career_Interest_3' => $value->career_interest_3,
                        'Professional_Certification_1' => $value->professional_certification_1,
                        'Professional_Certification_2' => $value->professional_certification_2,
                        'Professional_Certification_3' => $value->professional_certification_3,
                        'Masterpiece_1' => $value->masterpiece_1,
                        'Masterpiece_2' => $value->masterpiece_2,
                        'Masterpiece_3' => $value->masterpiece_3,
                        'About_and_Experience_1' => $value->about_and_experience_1,
                        'About_and_Experience_2' => $value->about_and_experience_2,
                        'About_and_Experience_3' => $value->about_and_experience_3,
                        ]);
                        // $user[] = [
                        //     'email' => $value->nip,
                        //     'password' => Hash::make($value->tgl_lahir),
                        // ];
                        // $role[] = [
                        // 'role_id' => '4',
                        // 'user_id' => $user->id,
                        // ];
                    }

                    foreach ($data as $key => $value) {
                        $user = User::create([
                            'email' => $value->nip,
                            'password' => Hash::make($value->tgl_lahir),
                        ]);
                        
                        $role = UserRole::create([
                            'role_id' => '4',
                            'user_id' => $user->id,
                        ]);
                    }

                    if(!empty($insert)){

                        // $insertData = DB::table('exprofiles')->insert($insert);
                        // $insertData = Exprofile::insert($insert);

                        if ($insert) {
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
