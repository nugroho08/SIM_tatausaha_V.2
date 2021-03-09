<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Uang extends Model
{
    use HasFactory;
    protected $table = "log_uangs";

    protected $primaryKey = "id";

    protected $fillable = [
        'status', 'jumlah_uang', 'tanggal', 'keterangan',

    ];
}
