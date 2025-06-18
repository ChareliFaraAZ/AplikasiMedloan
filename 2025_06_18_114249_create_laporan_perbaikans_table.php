<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up()
{
    Schema::create('laporan_perbaikans', function (Blueprint $table) {
        $table->id();
        $table->string('nama_teknisi');
        $table->string('gambar')->nullable();
        $table->date('tanggal');
        $table->time('waktu');
        $table->string('nama_alat');
        $table->text('laporan');
        $table->timestamps();
    });
}

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('laporan_perbaikans');
    }
};
