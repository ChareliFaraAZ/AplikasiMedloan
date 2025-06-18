<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Alat extends Model
{
    use HasFactory;

    protected $table = 'alats'; // sesuaikan dengan nama tabel Anda

    protected $fillable = ['nama', 'slug', 'gambar', 'deskripsi'];

    // Relasi: satu alat bisa memiliki banyak peminjaman
    public function peminjamans()
    {
        return $this->hasMany(Peminjaman::class, 'alat_id');
    }
}
