<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pegawai extends Model
{
    use HasFactory;

    protected $table = "employes";

    protected $primaryKey = "id";

    protected $fillable = [
        'nip', 'nama', 'jk', 'ttl', 'alamat', 'nama_orangtua', 'status', 'jumlah_tanggungan', 'tanggal_masuk', 'jabatan', 'pendidikan_terakhir',
    ];
}
