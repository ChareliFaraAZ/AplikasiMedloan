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
        Schema::create('alat_medis', function (Blueprint $table) {
        $table->id();
        $table->string('nama');
        $table->string('gambar'); // simpan path atau filename gambar
        $table->string('slug')->nullable();


        $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('alat_medis');
    }
};
