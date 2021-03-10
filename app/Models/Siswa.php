<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Siswa extends Model
{
    use HasFactory;

    protected $table = "siswas";

    protected $primaryKey = "id";

    protected $fillable = [
        'nisn',
        'nis',
        'nik',
        'nama',  
        'jk',
        'angkatan',
        'rayon',
        'tempat_lahir',
        'tanggal_lahir',
        'agama',
        'alamat',
        'asal_smp',
        'no_un_smp',
        'no_ijazah_smp',
        'no_skhun_smp',
        'no_hp_siswa',
        'no_kk',
        'nik_ayah',
        'nama_ayah',
        'pekerjaan_ayah',
        'no_hp_ayah',
        'nik_ibu',
        'nama_ibu',
        'pekerjaan_ibu',
        'no_hp_ibu',
        'anak_ke',
        'status_anak',
        'file'
    ];
}
