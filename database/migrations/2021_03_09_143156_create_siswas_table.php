<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSiswasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('siswas', function (Blueprint $table) {
            $table->id();
            $table->integer('nisn');
            $table->integer('nis');
            $table->integer('nik');
            $table->string('nama');
            $table->string('jk');
            $table->string('angkatan');
            $table->string('rayon');
            $table->string('tempat_lahir');
            $table->date('tanggal_lahir');
            $table->string('agama');
            $table->date('alamat');
            $table->date('asal_smp');
            $table->date('no_un_smp');
            $table->date('no_ijazah_smp');
            $table->date('no_skhun_smp');
            $table->date('no_hp_siswa');
            $table->date('no_kk');
            $table->date('nik_ayah');
            $table->date('nama_ayah');
            $table->date('pekerjaan_ayah');
            $table->date('no_hp_ayah');

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
        Schema::dropIfExists('siswas');
    }
}
