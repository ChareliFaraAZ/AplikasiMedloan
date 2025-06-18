<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    public function up(): void
    {
        Schema::create('alats', function (Blueprint $table) {
            $table->id();
            $table->string('nama_alat');
            $table->string('slug')->unique(); // digunakan untuk route/link
            $table->string('status')->default('tersedia'); // contoh: tersedia, tidak tersedia, rusak
            $table->integer('stok')->default(1); // jumlah stok alat
            $table->text('deskripsi')->nullable(); // deskripsi alat (opsional)
            $table->timestamps();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('alats');
    }
};
