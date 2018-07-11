<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Carbon\Carbon;

class Exprofile extends Model
{
    protected $table = 'exprofiles';
    protected $primaryKey = 'id';
    protected $fillable =[
    'Foto',
    'File_Foto',
    'Nama_Lengkap',
    'NIP',
    'Grade',
    'Jenjang',
    'Education_1',
    'Education_2',
    'Kota_Lahir',
    'tgl_lahir',
    'Gender',
    'Religion',
    'Kota_Domisili_Utama',
    'Alamat_Tinggal_Saat_Ini',
    'email_korporat',
    'handphone',
    'Sosmed_Aktif',
    'akun_sosmed_aktif_twitter_instagram_facebook',
    'Jabatan_Saat_ini',
    'Divisi_Satuan', 
    'Area_of_Expertise_1',
    'Area_of_Expertise_2',
    'Area_of_Expertise_3',
    'Career_Interest_1',
    'Career_Interest_2',
    'Career_Interest_3',
    'Professional_Certification_1',
    'Professional_Certification_2',
    'Professional_Certification_3',
    'Masterpiece_1',
    'Masterpiece_2',
    'Masterpiece_3',
    'About_and_Experience_1',
    'About_and_Experience_2',
    'About_and_Experience_3',
    ];

    public function getAgeAttribute()
    {
        return Carbon::parse($this->attributes['tgl_lahir'])->age;
    }
}
