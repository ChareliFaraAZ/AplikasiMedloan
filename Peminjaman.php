<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB; // tambahkan di atas
use Carbon\Carbon; // tambahkan di atas

class Peminjaman extends Model
{
    protected $table = 'peminjaman';

    protected $fillable = [
        'nama_peminjam',
        'tanggal_peminjaman',
        'tanggal_pengembalian',
        'alat_id',
        'jumlah',
    ];

    public function alat()
    {
        return $this->belongsTo(AlatMedis::class, 'alat_id');
    }
}
