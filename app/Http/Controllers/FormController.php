<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\DB;
use Image;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
use App\Http\Requests;
use App\Exprofile;
use File;


class FormController extends Controller
{
    public function formview()
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

        return view('pegawai.form-exprofile', ['exprofile' => $exprofile,'divisi' => $divisi, 'interest' => $interest] );

    }

    public function formeditdiri(Request $request)
    {
        $user = Auth::user();
        $exprofile=Exprofile::where('NIP',$user->email)->first();

        // $exprofile->Nama_Lengkap = $request->input('nama');
        // $exprofile->NIP = $request->input('nip');
        // $exprofile->Grade = $request->input('grade');
        // $exprofile->Jenjang = $request->input('jenjang');
        // $exprofile->Kota_Lahir = $request->input('kota_lahir');
        // $exprofile->tgl_lahir = $request->input('tgl_lahir');
        $exprofile->Gender = $request->input('gender');
        // $exprofile->Religion = $request->input('agama');
        $exprofile->Kota_Domisili_Utama = $request->input('domisili');
        $exprofile->Alamat_Tinggal_Saat_Ini = $request->input('alamat_tinggal');
        // $exprofile->email_korporat = $request->input('email');
        $exprofile->handphone = $request->input('handphone');
        $exprofile->Sosmed_Aktif = $request->input('media_sosial');
        $exprofile->akun_sosmed_aktif_twitter_instagram_facebook = $request->input('akun');
        // $exprofile->Jabatan_Saat_ini = $request->input('jabatan');
        // $exprofile->Divisi_Satuan = $request->input('divisi');
        //dd($exprofile);
        $exprofile->About_and_Experience_1 = $request->get('ae_1');
        $exprofile->About_and_Experience_2 = $request->get('ae_2');
        //dd($exprofile);
        $exprofile->About_and_Experience_3 = $request->input('ae_3');

        // dd($exprofiles);
        // $exprofile->update($exprofiles);
        $exprofile->save();

        if ($request->hasFile('foto')) {
            //Found existing file then delete
            $foto_new = $exprofile->File_Foto;
            if( File::exists(public_path('/fotoupload/' . $foto_new .'.jpeg' ))){
                File::delete(public_path('/fotoupload/' . $foto_new .'.jpeg' ));
            }
            if( File::exists(public_path('/fotoupload/' . $foto_new .'.jpg' ))){
                File::delete(public_path('/fotoupload/' . $foto_new .'.jpg' ));
            }
            if( File::exists(public_path('/fotoupload/' . $foto_new .'.png' ))){
                File::delete(public_path('/fotoupload/' . $foto_new .'.png' ));
            }

            $foto = $request->file('foto');
            $foto_name = $foto_new . '.' .$foto->getClientOriginalExtension();
            Image::make($foto)->resize(300, 300)->save( public_path('/fotoupload/' . $foto_name ) );
            $user = Auth::user();
            $exprofile=Exprofile::where('NIP',$user->email)->first();
            $exprofile->save();
        }
        
        return redirect()->intended(route('form.view'));
    }


    public function formeditedu(Request $request)
    {
        $user = Auth::user();
        $exprofile=Exprofile::where('NIP',$user->email)->first();

        $exprofile->Education_1 = $request->input('edu1');
        $exprofile->Education_2 = $request->input('edu2');
        $exprofile->Professional_Certification_1 = $request->input('certif1');
        $exprofile->Professional_Certification_2 = $request->input('certif2');
        $exprofile->Professional_Certification_3 = $request->input('certif3');

        $exprofile->save();
        return redirect()->intended(route('form.view'));
    }

     public function formeditcareer(Request $request)
    {
        $user = Auth::user();
        $exprofile=Exprofile::where('NIP',$user->email)->first();

        $exprofile->Area_of_Expertise_1 = $request->input('expert1');
        $exprofile->Area_of_Expertise_2 = $request->input('expert2');
        $exprofile->Area_of_Expertise_3 = $request->input('expert3');
        $exprofile->Career_Interest_1 = $request->input('interest1');
        $exprofile->Career_Interest_2 = $request->input('interest2');
        $exprofile->Career_Interest_3 = $request->input('interest3');
       
        $exprofile->save();
        return redirect()->intended(route('form.view'));
    }

    public function formeditmaster(Request $request)
    {
        $user = Auth::user();
        $exprofile=Exprofile::where('NIP',$user->email)->first();

        $exprofile->Masterpiece_1 = $request->input('master1');
        $exprofile->Masterpiece_2 = $request->input('master2');
        $exprofile->Masterpiece_3 = $request->input('master3');
       
        $exprofile->save();
        return redirect()->intended(route('form.view'));
    }


}
