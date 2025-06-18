<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class LaporanPerbaikan extends Model
{
    use HasFactory;

    protected $table = 'laporan_perbaikans';

    protected $fillable = [
        'laporan_kerusakan_id', // <- tambahkan ini
        'nama_teknisi',
        'gambar',
        'tanggal',
        'waktu',
        'nama_alat',
        'laporan',
    ];

    public function laporanKerusakan()
    {
        return $this->belongsTo(LaporanKerusakan::class, 'laporan_kerusakan_id');
    }
}
