<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('perawatans', function (Blueprint $table) {
            $table->id();
             $table->string('nama_teknisi');
             $table->string('unit_kerja');
              $table->date('tanggal_perbaikan');
              $table->time('waktu_perbaikan');
              $table->string('jenis_perawatan');
              $table->text('deskripsi_tindakan');
              $table->string('gambar')->nullable();
              $table->string('nama_alat');
              $table->text('kondisi_setelah_perawatan');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('perawatans');
    }
};
