<?php

use Illuminate\Database\Seeder;
use App\Divisi;
use App\User;
class DivisiTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
    	DB::table('divisi')->delete();
        $divisis = [
            ['nama_divisi' => 'DIVISI ADMINISTRASI KONSTRUKSI'],
            ['nama_divisi' => 'DIVISI AKUNTANSI'],
            ['nama_divisi' => 'DIVISI ANGGARAN'],
            ['nama_divisi' => 'DIVISI ENERGI BARU DAN TERBARUKAN'],
            ['nama_divisi' => 'DIVISI ENJINIRING DAN PERENCANAAN PENGADAAN'],
            ['nama_divisi' => 'DIVISI HUMAN CAPITAL MANAGEMENT SYSTEM'],
            ['nama_divisi' => 'DIVISI KESELAMATAN, KESEHATAN KERJA, KEAMANAN DAN LINGKUNGAN'],
            ['nama_divisi' => 'DIVISI KEUANGAN'],
            ['nama_divisi' => 'DIVISI KONSTRUKSI REGIONAL JAWA BAGIAN BARAT'],
            ['nama_divisi' => 'DIVISI KONSTRUKSI REGIONAL JAWA BAGIAN TENGAH'],
            ['nama_divisi' => 'DIVISI KONSTRUKSI REGIONAL JAWA BAGIAN TIMUR, BALI DAN NUSA TENGGARA'],
            ['nama_divisi' => 'DIVISI KONSTRUKSI REGIONAL KALIMANTAN'],
            ['nama_divisi' => 'DIVISI KONSTRUKSI REGIONAL MALUKU DAN PAPUA'],
            ['nama_divisi' => 'DIVISI KONSTRUKSI REGIONAL SULAWESI'],
            ['nama_divisi' => 'DIVISI KONSTRUKSI REGIONAL SUMATERA'],
            ['nama_divisi' => 'DIVISI MANAJEMEN RISIKO DAN KEPATUHAN'],
            ['nama_divisi' => 'DIVISI NIAGA '],
            ['nama_divisi' => 'DIVISI OPERASI REGIONAL JAWA BAGIAN BARAT'],
            ['nama_divisi' => 'DIVISI OPERASI REGIONAL JAWA BAGIAN TENGAH'],
            ['nama_divisi' => 'DIVISI OPERASI REGIONAL JAWA BAGIAN TIMUR, BALI DAN NUSA TENGGARA'],
            ['nama_divisi' => 'DIVISI OPERASI REGIONAL KALIMANTAN'],
            ['nama_divisi' => 'DIVISI OPERASI REGIONAL MALUKU DAN PAPUA'],
            ['nama_divisi' => 'DIVISI OPERASI REGIONAL SULAWESI'],
            ['nama_divisi' => 'DIVISI OPERASI REGIONAL SUMATERA'],
            ['nama_divisi' => 'DIVISI PENGADAAN STRATEGIS'],
            ['nama_divisi' => 'DIVISI PENGEMBANGAN ORGANISASI'],
            ['nama_divisi' => 'DIVISI PENGEMBANGAN REGIONAL JAWA BAGIAN BARAT'],
            ['nama_divisi' => 'DIVISI PENGEMBANGAN REGIONAL JAWA BAGIAN TENGAH'],
            ['nama_divisi' => 'DIVISI PENGEMBANGAN REGIONAL JAWA BAGIAN TIMUR, BALI DAN NUSA TENGGARA'],
            ['nama_divisi' => 'DIVISI PENGEMBANGAN REGIONAL KALIMANTAN'],
            ['nama_divisi' => 'DIVISI PENGEMBANGAN REGIONAL MALUKU DAN PAPUA'],
            ['nama_divisi' => 'DIVISI PENGEMBANGAN REGIONAL SULAWESI'],
            ['nama_divisi' => 'DIVISI PENGEMBANGAN REGIONAL SUMATERA'],
            ['nama_divisi' => 'DIVISI PENGEMBANGAN TALENTA'],
            ['nama_divisi' => 'DIVISI PERENCANAAN KORPORAT'],
            ['nama_divisi' => 'DIVISI PERENCANAAN SISTEM'],
            ['nama_divisi' => 'DIVISI PERIZINAN DAN PERTANAHAN'],
            ['nama_divisi' => 'DIVISI SISTEM DAN TEKNOLOGI INFORMASI'],
            ['nama_divisi' => 'DIVISI SUPPLY CHAIN MANAGEMENT'],
            ['nama_divisi' => 'DIVISI TRANSAKSI TENAGA LISTRIK DAN KEMITRAAN BISNIS'],
            ['nama_divisi' => 'DIVISI TREASURY'],
            ['nama_divisi' => 'DIVISI UMUM '],
            ['nama_divisi' => 'INSPEKTORAT AUDIT REGIONAL JAWA BAGIAN BARAT'],
            ['nama_divisi' => 'INSPEKTORAT AUDIT REGIONAL JAWA BAGIAN TENGAH'],
            ['nama_divisi' => 'INSPEKTORAT AUDIT REGIONAL JAWA BAGIAN TIMUR DAN BALI'],
            ['nama_divisi' => 'INSPEKTORAT AUDIT REGIONAL KALIMANTAN'],
            ['nama_divisi' => 'INSPEKTORAT AUDIT REGIONAL KANTOR PUSAT'],
            ['nama_divisi' => 'INSPEKTORAT AUDIT REGIONAL MALUKU DAN PAPUA'],
            ['nama_divisi' => 'INSPEKTORAT AUDIT REGIONAL SULAWESI DAN NUSA TENGGARA'],
            ['nama_divisi' => 'INSPEKTORAT AUDIT REGIONAL SUMATERA'],
            ['nama_divisi' => 'INSPEKTORAT PENGEMBANGAN SISTEM KUALITAS AUDIT'],
            ['nama_divisi' => 'SATUAN BATUBARA'],
            ['nama_divisi' => 'SATUAN GAS DAN BBM'],
            ['nama_divisi' => 'SATUAN HUKUM KORPORAT'],
            ['nama_divisi' => 'SATUAN KOMUNIKASI KORPORAT'],
            ['nama_divisi' => 'SATUAN PENGADAAN IPP'],
            ['nama_divisi' => 'SATUAN PENGAWASAN INTERN'],
            ['nama_divisi' => 'SATUAN PENGENDALIAN KINERJA KORPORAT'],
            ['nama_divisi' => 'SEKRETARIS PERUSAHAAN']
        ];

        foreach($divisis as $div){
            Divisi::create($div);
        }

        
    }
}
