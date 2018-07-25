<?php

use Illuminate\Database\Seeder;
use App\UserRole;
use App\Role;
use App\Divisi;
use App\User;
class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

        DB::table('users')->insert([
            'id' => '1',
            
        ]);

        $units = [
            [   'email' => 'superadmin@plnpusat',
                'password' => bcrypt('icon@2018')],
            [   'email' => 'DIVISI ADMINISTRASI KONSTRUKSI', 
                'password' => bcrypt('DIVISI ADMINISTRASI KONSTRUKSI')],
            [   'email' => 'DIVISI AKUNTANSI', 
                'password' => bcrypt('DIVISI AKUNTANSI')],
            [   'email' => 'DIVISI ANGGARAN', 
                'password' => bcrypt('DIVISI ANGGARAN')],
            [   'email' => 'DIVISI ENERGI BARU DAN TERBARUKAN', 
                'password' => bcrypt('DIVISI ENERGI BARU DAN TERBARUKAN')],
            [   'email' => 'DIVISI ENJINIRING DAN PERENCANAAN PENGADAAN', 
                'password' => bcrypt('DIVISI ENJINIRING DAN PERENCANAAN PENGADAAN')],
            [   'email' => 'DIVISI HUMAN CAPITAL MANAGEMENT SYSTEM', 
                'password' => bcrypt('DIVISI HUMAN CAPITAL MANAGEMENT SYSTEM')],
            [   'email' => 'DIVISI KESELAMATAN, KESEHATAN KERJA, KEAMANAN DAN LINGKUNGAN', 
                'password' => bcrypt('DIVISI KESELAMATAN, KESEHATAN KERJA, KEAMANAN DAN LINGKUNGAN')],
            [   'email' => 'DIVISI KEUANGAN', 
                'password' => bcrypt('DIVISI KEUANGAN')],
            [   'email' => 'DIVISI KONSTRUKSI REGIONAL JAWA BAGIAN BARAT', 
                'password' => bcrypt('DIVISI KONSTRUKSI REGIONAL JAWA BAGIAN BARAT')],
            [   'email' => 'DIVISI KONSTRUKSI REGIONAL JAWA BAGIAN TENGAH', 
                'password' => bcrypt('DIVISI KONSTRUKSI REGIONAL JAWA BAGIAN TENGAH')],
            [   'email' => 'DIVISI KONSTRUKSI REGIONAL JAWA BAGIAN TIMUR, BALI DAN NUSA TENGGARA', 
                'password' => bcrypt('DIVISI KONSTRUKSI REGIONAL JAWA BAGIAN TIMUR, BALI DAN NUSA TENGGARA')],
            [   'email' => 'DIVISI KONSTRUKSI REGIONAL KALIMANTAN', 
                'password' => bcrypt('DIVISI KONSTRUKSI REGIONAL KALIMANTAN')],
            [   'email' => 'DIVISI KONSTRUKSI REGIONAL MALUKU DAN PAPUA', 
                'password' => bcrypt('DIVISI KONSTRUKSI REGIONAL MALUKU DAN PAPUA')],
            [   'email' => 'DIVISI KONSTRUKSI REGIONAL SULAWESI', 
                'password' => bcrypt('DIVISI KONSTRUKSI REGIONAL SULAWESI')],
            [   'email' => 'DIVISI KONSTRUKSI REGIONAL SUMATERA', 
                'password' => bcrypt('DIVISI KONSTRUKSI REGIONAL SUMATERA')],
            [   'email' => 'DIVISI MANAJEMEN RISIKO DAN KEPATUHAN', 
                'password' => bcrypt('DIVISI MANAJEMEN RISIKO DAN KEPATUHAN')],
            [   'email' => 'DIVISI NIAGA', 
                'password' => bcrypt('DIVISI NIAGA')],
            [   'email' => 'DIVISI OPERASI REGIONAL JAWA BAGIAN BARAT', 
                'password' => bcrypt('DIVISI OPERASI REGIONAL JAWA BAGIAN BARAT')],
            [   'email' => 'DIVISI OPERASI REGIONAL JAWA BAGIAN TENGAH',
                'password' => bcrypt('DIVISI OPERASI REGIONAL JAWA BAGIAN TENGAH')],
            [   'email' => 'DIVISI OPERASI REGIONAL JAWA BAGIAN TIMUR, BALI DAN NUSA TENGGARA', 
                'password' => bcrypt('DIVISI OPERASI REGIONAL JAWA BAGIAN TIMUR, BALI DAN NUSA TENGGARA')],
            [   'email' => 'DIVISI OPERASI REGIONAL KALIMANTAN', 
                'password' => bcrypt('DIVISI OPERASI REGIONAL KALIMANTAN')],
            [   'email' => 'DIVISI OPERASI REGIONAL MALUKU DAN PAPUA', 
                'password' => bcrypt('DIVISI OPERASI REGIONAL MALUKU DAN PAPUA')],
            [   'email' => 'DIVISI OPERASI REGIONAL SULAWESI', 
                'password' => bcrypt('DIVISI OPERASI REGIONAL SULAWESI')],
            [   'email' => 'DIVISI OPERASI REGIONAL SUMATERA', 
                'password' => bcrypt('DIVISI OPERASI REGIONAL SUMATERA')],
            [   'email' => 'DIVISI PENGADAAN STRATEGIS', 
                'password' => bcrypt('DIVISI PENGADAAN STRATEGIS')],
            [   'email' => 'DIVISI PENGEMBANGAN ORGANISASI', 
                'password' => bcrypt('DIVISI PENGEMBANGAN ORGANISASI')],
            [   'email' => 'DIVISI PENGEMBANGAN REGIONAL JAWA BAGIAN BARAT', 
                'password' => bcrypt('DIVISI PENGEMBANGAN REGIONAL JAWA BAGIAN BARAT')],
            [   'email' => 'DIVISI PENGEMBANGAN REGIONAL JAWA BAGIAN TENGAH', 
                'password' => bcrypt('DIVISI PENGEMBANGAN REGIONAL JAWA BAGIAN TENGAH')],
            [   'email' => 'DIVISI PENGEMBANGAN REGIONAL JAWA BAGIAN TIMUR, BALI DAN NUSA TENGGARA',
                'password' => bcrypt('DIVISI PENGEMBANGAN REGIONAL JAWA BAGIAN TIMUR, BALI DAN NUSA TENGGARA')],
            [   'email' => 'DIVISI PENGEMBANGAN REGIONAL KALIMANTAN',
                'password' => bcrypt('DIVISI PENGEMBANGAN REGIONAL KALIMANTAN')],
            [   'email' => 'DIVISI PENGEMBANGAN REGIONAL MALUKU DAN PAPUA',
                'password' => bcrypt('DIVISI PENGEMBANGAN REGIONAL MALUKU DAN PAPUA')],
            [   'email' => 'DIVISI PENGEMBANGAN REGIONAL SULAWESI',
                'password' => bcrypt('DIVISI PENGEMBANGAN REGIONAL SULAWESI')],
            [   'email' => 'DIVISI PENGEMBANGAN REGIONAL SUMATERA',
                'password' => bcrypt('DIVISI PENGEMBANGAN REGIONAL SUMATERA')],
            [   'email' => 'DIVISI PENGEMBANGAN TALENTA',
                'password' => bcrypt('DIVISI PENGEMBANGAN TALENTA')],
            [   'email' => 'DIVISI PERENCANAAN KORPORAT',
                'password' => bcrypt('DIVISI PERENCANAAN KORPORAT')],
            [   'email' => 'DIVISI PERENCANAAN SISTEM',
                'password' => bcrypt('DIVISI PERENCANAAN SISTEM')],
            [   'email' => 'DIVISI PERIZINAN DAN PERTANAHAN',
                'password' => bcrypt('DIVISI PERIZINAN DAN PERTANAHAN')],
            [   'email' => 'DIVISI SISTEM DAN TEKNOLOGI INFORMASI',
                'password' => bcrypt('DIVISI SISTEM DAN TEKNOLOGI INFORMASI')],
            [   'email' => 'DIVISI SUPPLY CHAIN MANAGEMENT',
                'password' => bcrypt('DIVISI SUPPLY CHAIN MANAGEMENT')],
            [   'email' => 'DIVISI TRANSAKSI TENAGA LISTRIK DAN KEMITRAAN BISNIS',
                'password' => bcrypt('DIVISI TRANSAKSI TENAGA LISTRIK DAN KEMITRAAN BISNIS')],
            [   'email' => 'DIVISI TREASURY',
                'password' => bcrypt('DIVISI TREASURY')],
            [   'email' => 'DIVISI UMUM',
                'password' => bcrypt('DIVISI UMUM')],
            [   'email' => 'INSPEKTORAT AUDIT REGIONAL JAWA BAGIAN BARAT',
                'password' => bcrypt('INSPEKTORAT AUDIT REGIONAL JAWA BAGIAN BARAT')],
            [   'email' => 'INSPEKTORAT AUDIT REGIONAL JAWA BAGIAN TENGAH', 
                'password' => bcrypt('INSPEKTORAT AUDIT REGIONAL JAWA BAGIAN TENGAH')],
            [   'email' => 'INSPEKTORAT AUDIT REGIONAL JAWA BAGIAN TIMUR DAN BALI',
                'password' => bcrypt('INSPEKTORAT AUDIT REGIONAL JAWA BAGIAN TIMUR DAN BALI')],
            [   'email' => 'INSPEKTORAT AUDIT REGIONAL KALIMANTAN',
                'password' => bcrypt('INSPEKTORAT AUDIT REGIONAL KALIMANTAN')],
            [   'email' => 'INSPEKTORAT AUDIT REGIONAL KANTOR PUSAT',
                'password' => bcrypt('INSPEKTORAT AUDIT REGIONAL KANTOR PUSAT')],
            [   'email' => 'INSPEKTORAT AUDIT REGIONAL MALUKU DAN PAPUA',
                'password' => bcrypt('INSPEKTORAT AUDIT REGIONAL MALUKU DAN PAPUA')],
            [   'email' => 'INSPEKTORAT AUDIT REGIONAL SULAWESI DAN NUSA TENGGARA',
                'password' => bcrypt('INSPEKTORAT AUDIT REGIONAL SULAWESI DAN NUSA TENGGARA')],
            [   'email' => 'INSPEKTORAT AUDIT REGIONAL SUMATERA',
                'password' => bcrypt('INSPEKTORAT AUDIT REGIONAL SUMATERA')],
            [   'email' => 'INSPEKTORAT PENGEMBANGAN SISTEM KUALITAS AUDIT',
                'password' => bcrypt('INSPEKTORAT PENGEMBANGAN SISTEM KUALITAS AUDIT')],
            [   'email' => 'SATUAN BATUBARA',
                'password' => bcrypt('SATUAN BATUBARA')],
            [   'email' => 'SATUAN GAS DAN BBM',
                'password' => bcrypt('SATUAN GAS DAN BBM')],
            [   'email' => 'SATUAN HUKUM KORPORAT',
                'password' => bcrypt('SATUAN HUKUM KORPORAT')],
            [   'email' => 'SATUAN KOMUNIKASI KORPORAT',
                'password' => bcrypt('SATUAN KOMUNIKASI KORPORAT')],
            [   'email' => 'SATUAN PENGADAAN IPP',
                'password' => bcrypt('SATUAN PENGADAAN IPP')],
            [   'email' => 'SATUAN PENGAWASAN INTERN',
                'password' => bcrypt('SATUAN PENGAWASAN INTERN')],
            [   'email' => 'SATUAN PENGENDALIAN KINERJA KORPORAT',
                'password' => bcrypt('SATUAN PENGENDALIAN KINERJA KORPORAT')],
            [   'email' => 'SEKRETARIS PERUSAHAAN',
                'password' => bcrypt('SEKRETARIS PERUSAHAAN')]
        ];

        foreach($units as $unit){
            User::create($unit);
        }

        foreach($units as $unit){
            if($unit['email'] == 'superadmin@plnpusat') {
                DB::table('role_user')->insert([
                'user_id' => $unit['id'],
                'role_id' => '1',
                ]);
            } else {
                DB::table('role_user')->insert([
                'user_id' => $unit['id'],
                'role_id' => '3',
                ]);
            }
        }

        $roles = [
            ['id' => 1, 'role_name' => 'superadmin'],
            ['id' => 2, 'role_name' => 'plnpusat'],
            ['id' => 3, 'role_name' => 'unit'],
            ['id' => 4, 'role_name' => 'pegawai'],
        ];

        foreach($roles as $role){
            Role::create($role);
        }

        
    }
}
