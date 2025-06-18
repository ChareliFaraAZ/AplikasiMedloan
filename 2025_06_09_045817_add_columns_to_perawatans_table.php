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
       Schema::table('perawatans', function (Blueprint $table) {
    $table->string('nama_teknisi')->nullable();
    $table->string('unit_kerja')->nullable();
    $table->date('tanggal_perbaikan')->nullable();
    $table->time('waktu_perbaikan')->nullable();
    $table->string('jenis_perawatan')->nullable();
    $table->text('deskripsi_tindakan')->nullable();
    $table->string('gambar')->nullable();
    $table->string('nama_alat')->nullable();
    $table->text('kondisi_setelah_perawatan')->nullable();
});
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('perawatans', function (Blueprint $table) {
            //
        });
    }
};
