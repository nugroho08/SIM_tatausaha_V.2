<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateStudentsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('students', function (Blueprint $table) {
            $table->id();
            $table->integer('nisn');
            $table->integer('nis');
            $table->integer('nik');
            $table->string('name');
            $table->string('jk');
            $table->string('angkatan');
            $table->string('rayon');
            $table->string('tempat_lahir');
            $table->date('tanggal_lahir');
            $table->string('agama');
            $table->string('alamat');
            $table->string('asal_smp');
            $table->string('no_un_smp');
            $table->string('no_ijazah_smp');
            $table->string('no_skhun_smp');
            $table->string('no_hp_siswa');
            $table->string('no_kk');
            $table->integer('nik_ayah');
            $table->string('nama_Ayah');
            $table->string('pekerjaan_Ayah');
            $table->integer('no_hp_ayah');
            $table->integer('nik_ibu');
            $table->string('nama_ibu');
            $table->string('pekerjaan_ibu');
            $table->integer('no_hp_ibu');
            $table->string('anak_ke');
            $table->string('status_anak');
            $table->string('nama_file')->nullable();
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
        Schema::dropIfExists('students');
    }
}
