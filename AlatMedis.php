<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class AlatMedis extends Model
{
    use HasFactory;

    protected $table = 'alat_medis'; // Nama tabel di database

    // Pastikan semua kolom yang ingin kamu isi massal dimasukkan ke sini
    protected $fillable = [
        'nama', 
        'gambar', 
        'slug',
        'status',  // contoh: tersedia/dipinjam
        'stok',    // contoh: jumlah stok alat
    ];
}
