<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PerawatanAlat extends Model
{
    use HasFactory;

    protected $table = 'perawatan_alat';

    protected $fillable = [
        'nama_alat',
        'status_perawatan',
    ];
}
