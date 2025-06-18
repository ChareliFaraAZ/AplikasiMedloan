<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;

class User extends Authenticatable
{
    use HasFactory, Notifiable;

    protected $fillable = [
        'name',
        'email',
        'password',
        'role',
        'nip', // kalau kamu pakai NIP, bisa dimasukkan juga
    ];

    protected $hidden = [
        'password',
        'remember_token',
    ];

    protected function casts(): array
    {
        return [
            'email_verified_at' => 'datetime',
            'password' => 'hashed',
        ];
    }

    // 🔁 Relasi ke peminjaman alat
    public function peminjamans()
    {
        return $this->hasMany(Peminjaman::class);
    }

    // 🔁 Relasi ke laporan kerusakan
    public function laporanKerusakans()
    {
        return $this->hasMany(LaporanKerusakan::class);
    }

    // 🔁 Relasi ke laporan perawatan
    public function perawatans()
    {
        return $this->hasMany(Perawatan::class);
    }

    // 🔁 Relasi ke laporan perbaikan
    public function perbaikans()
    {
        return $this->hasMany(Perbaikan::class);
    }
}
