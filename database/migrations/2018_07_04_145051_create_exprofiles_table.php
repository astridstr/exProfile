<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateExprofilesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('exprofiles', function (Blueprint $table) {
            $table->increments('id');
            $table->string('Foto')->nullable();
            $table->string('File_Foto')->nullable();
            $table->string('Nama_Lengkap', 190)->nullable();
            $table->string('NIP', 190)->nullable();
            $table->string('Grade', 190)->nullable();
            $table->string('Jenjang', 190)->nullable();
            $table->string('Education_1', 190)->nullable();
            $table->string('Education_2', 190)->nullable();
            $table->string('Kota_Lahir', 190)->nullable();
            $table->date('tgl_lahir', 190)->nullable();
            $table->string('Gender', 190)->nullable();
            $table->string('Religion', 190)->nullable();
            $table->string('Kota_Domisili_Utama', 190)->nullable();
            $table->string('Alamat_Tinggal_Saat_Ini', 190)->nullable();
            $table->string('email_korporat', 190)->nullable();
            $table->string('handphone', 190)->nullable();
            $table->string('Sosmed_Aktif', 190)->nullable();
            $table->string('akun_sosmed_aktif_twitter_instagram_facebook', 190)->nullable();
            $table->string('Jabatan_Saat_ini', 190)->nullable();
            $table->string('Divisi_Satuan', 190)->nullable();
            $table->string('Area_of_Expertise_1', 190)->nullable();
            $table->string('Area_of_Expertise_2', 190)->nullable();
            $table->string('Area_of_Expertise_3', 190)->nullable();
            $table->string('Career_Interest_1', 190)->nullable();
            $table->string('Career_Interest_2', 190)->nullable();
            $table->string('Career_Interest_3', 190)->nullable();
            $table->string('Professional_Certification_1', 190)->nullable();
            $table->string('Professional_Certification_2', 190)->nullable();
            $table->string('Professional_Certification_3', 190)->nullable();
            $table->longText('Masterpiece_1', 190)->nullable();
            $table->longText('Masterpiece_2', 190)->nullable();
            $table->longText('Masterpiece_3', 190)->nullable();
            $table->longText('About_and_Experience_1')->nullable();
            $table->longText('About_and_Experience_2')->nullable();
            $table->longText('About_and_Experience_3')->nullable();
            $table->rememberToken();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('exprofiles');
    }
}
