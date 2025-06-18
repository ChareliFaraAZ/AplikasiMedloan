<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Support\Str;

class CatatanPerawatan extends Model
{
    use HasFactory;

    public $incrementing = false;
    protected $keyType = 'string';

    protected $fillable = [
        'alat_id',  // relasi ke tabel alat_medis
        'status',
    ];

    protected static function boot()
    {
        parent::boot();
        static::creating(function ($model) {
            $model->id = (string) Str::uuid();
        });
    }

    // Tambahkan relasi ke tabel AlatMedis
  public function alat()
{
    return $this->belongsTo(AlatMedis::class, 'alat_id', 'id');
}



}
