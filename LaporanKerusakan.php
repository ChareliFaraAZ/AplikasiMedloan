<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class LaporanKerusakan extends Model
{
    use HasFactory;

    // Nama tabel di database
    protected $table = 'laporan_kerusakan';

    // Kolom yang boleh diisi secara massal
    protected $fillable = [
        'nama_pelapor',
        'alat_medis',
        'jabatan',
        'tanggal_laporan',
        'isi_laporan',
        'status', // <- penting agar bisa diubah (misalnya ke "Telah Diperbaiki")
    ];

    // Tidak menggunakan created_at dan updated_at
    public $timestamps = false;

    // Relasi ke laporan perbaikan (satu kerusakan bisa punya banyak perbaikan)
    public function perbaikans()
    {
        return $this->hasMany(LaporanPerbaikan::class, 'laporan_kerusakan_id');
    }
}
