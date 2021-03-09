<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class SuratMasuk extends Model
{
    use HasFactory;

    protected $table = "incoming_mails";

    protected $primaryKey = "id";

    protected $fillable = [
        'tanggal_surat', 'jenis_surat', 'no_surat', 'prihal', 'instansi', 'nama_file',
    ];
}