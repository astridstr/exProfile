<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\DB;
use Image;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
use App\Http\Requests;
use App\Exprofile;

class FormController extends Controller
{
    public function formview()
    {
    	 $exprofile = DB::table('exprofiles')
            ->where('NIP', '6894001Z')
            ->select('*')
            ->first();
        //dd($exprofile);

        $divisi = DB::table('divisi')
            ->select('nama_divisi')
            ->get();

        return view('formexprofilev1', ['exprofile' => $exprofile,'divisi' => $divisi] );
    }

    public function formeditdiri(Request $request)
    {
        $exprofile=Exprofile::where('NIP','6894001Z')->first();
        // $exprofile = DB::table('exprofiles')
        //     ->where('NIP', '6894001Z')
        //     ->select('*')
        //     ->first();

        //dd($exprofile);
        //$exprofiles=$request->all();

        $exprofile->Nama_Lengkap = $request->input('nama');
        $exprofile->NIP = $request->input('nip');
        $exprofile->Grade = $request->input('grade');
        $exprofile->Jenjang = $request->input('jenjang');
        $exprofile->Kota_Lahir = $request->input('kota_lahir');
        $exprofile->tgl_lahir = $request->input('tgl_lahir');
        $exprofile->Gender = $request->input('gender');
        $exprofile->Religion = $request->input('agama');
        $exprofile->Kota_Domisili_Utama = $request->input('domisili');
        $exprofile->Alamat_Tinggal_Saat_Ini = $request->input('alamat_tinggal');
        $exprofile->email_korporat = $request->input('email');
        $exprofile->handphone = $request->input('handphone');
        $exprofile->Sosmed_Aktif = $request->input('media_sosial');
        $exprofile->akun_sosmed_aktif_twitter_instagram_facebook = $request->input('akun');
        $exprofile->Jabatan_Saat_ini = $request->input('jabatan');
        $exprofile->Divisi_Satuan = $request->input('divisi');
        //dd($exprofile);
        $exprofile->About_and_Experience_1 = $request->get('ae_1');
        $exprofile->About_and_Experience_2 = $request->get('ae_2');
        //dd($exprofile);
        $exprofile->About_and_Experience_3 = $request->input('ae_3');
        // dd($exprofiles);
        // $exprofile->update($exprofiles);
        $exprofile->save();
        

        if ($request->hasFile('foto')) {
            $foto = $request->file('foto');
            $foto_name = time() . '.' .$foto->getClientOriginalExtension();
            Image::make($foto)->resize(300, 300)->save( public_path('/fotoupload/' . $foto_name ) );
            $exprofile=Exprofile::where('NIP','6894001Z')->first();
            $foto_name = time();
            $exprofile->File_Foto = $foto_name;
            $exprofile->save();
        }
        
        return redirect('formexprofilev1');
    }


}
