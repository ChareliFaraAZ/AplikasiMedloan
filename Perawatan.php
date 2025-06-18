<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Perawatan extends Model
{
    protected $fillable = [
        'nama_teknisi',
        'unit_kerja',
        'tanggal_perbaikan',
        'waktu_perbaikan',
        'jenis_perawatan',
        'deskripsi_tindakan',
        'gambar',
        'nama_alat',
        'kondisi_setelah_perawatan',
    ];
}
