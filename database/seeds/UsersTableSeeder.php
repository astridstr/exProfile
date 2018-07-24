<?php

use Illuminate\Database\Seeder;

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
            'email' => 'xp123@gmail.com',
            'password' => bcrypt('icon@2018'),
        ]);

        DB::table('roles')->insert([
            'id' => '1',
            'role_name' => 'superadmin',
        ]);

        DB::table('roles')->insert([
            'id' => '2',
            'role_name' => 'plnpusat',
        ]);

        DB::table('roles')->insert([
            'id' => '3',
            'role_name' => 'unit',
        ]);

        DB::table('roles')->insert([
            'id' => '4',
            'role_name' => 'pegawai',
        ]);

        DB::table('role_user')->insert([
            'user_id' => '1',
            'role_id' => '1',
        ]);

    }
}
