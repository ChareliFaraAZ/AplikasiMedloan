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
        Schema::create('catatan_perawatans', function (Blueprint $table) {
        $table->uuid('id')->primary();
        $table->string('nama_alat');
        $table->string('kode_alat');
        $table->enum('status', ['PERLU PERAWATAN', 'SELESAI'])->default('PERLU PERAWATAN');
        $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('catatan_perawatans');
    }
};
