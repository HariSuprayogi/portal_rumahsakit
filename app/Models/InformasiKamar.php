<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class InformasiKamar extends Model
{
    use HasFactory;

    protected $table = 'kamar'; // gunakan tabel 'kamar' jika sama

    protected $fillable = [
    'nama_kamar',
    'tipe_kamar',
    'jumlah_kamar',
    'terpakai',
    'status',
];

}
