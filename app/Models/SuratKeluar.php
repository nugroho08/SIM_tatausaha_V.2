<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class SuratKeluar extends Model
{
    use HasFactory;

    protected $table = "outgoing_mails";

    protected $primaryKey = "id";

    protected $fillable = [
        'tanggal_surat', 'jenis_surat', 'no_surat', 'prihal', 'tujuan', 'pengantar', 'nama_file',

    ];
}
