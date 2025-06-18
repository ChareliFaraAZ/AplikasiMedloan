<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class LaporanPemakaian extends Model
{
    use HasFactory;

    protected $table = 'laporan_pemakaian';

    protected $fillable = [
        'nama_alat',
        'nama_peminjam',
        'durasi_pemakaian',
        'total_hari',
        'keperluan',
        'tanggal_terakhir',
    ];
}
