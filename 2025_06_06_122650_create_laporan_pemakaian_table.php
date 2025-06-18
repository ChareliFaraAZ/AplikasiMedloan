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
        Schema::create('laporan_pemakaian', function (Blueprint $table) {
            $table->id();
            $table->string('nama_alat');
            $table->string('nama_peminjam');
            $table->integer('durasi_pemakaian')->nullable();
            $table->integer('total_hari')->nullable();
            $table->text('keperluan')->nullable();
            $table->date('tanggal_terakhir');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('laporan_pemakaian');
    }
};
