<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\DB;

use Illuminate\Http\Request;

class FormController extends Controller
{
    public function formview()
    {
    	 $exprofile = DB::table('exprofiles')
            ->where('NIP', '6792085Z')
            ->select('*')
            ->first();

        $divisi = DB::table('divisi')
            ->select('nama_divisi')
            ->get();

        return view('formexprofilev1', ['exprofile' => $exprofile,'divisi' => $divisi] );
    }

    public function formedit(Request $request)
    {
        $exprofile = DB::table('exprofiles')
            ->where('NIP', '6792085Z')
            ->select('*')
            ->first();
        dd($exprofile);
        $exprofile->name = $request->input('nama');
        $exprofile->type_bisnis = $request->input('tipe_bisnis');
        $exprofile->nama_bisnis = $request->input('nama_bisnis');
        $exprofile->email = $request->input('email');
        $exprofile->alamat = $request->input('alamat');
        $exprofile->no_hp = $request->input('no_hp');

        $user->save();
        if ($request->hasFile('foto')) {
            $foto = $request->file('foto');
            $foto_name = time() . '.' .$foto->getClientOriginalExtension();
            Image::make($foto)->resize(300, 300)->save( public_path('/fotoupload/' . $foto_name ) );
            $user = Auth::user();
            $user->foto = $foto_name;
            $user->save();
        }
        
        return redirect('donatur-profile1');
    }


}
