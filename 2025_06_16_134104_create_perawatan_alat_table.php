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
    Schema::create('perawatan_alat', function (Blueprint $table) {
        $table->id();
        $table->string('nama_alat');
        $table->string('status_perawatan')->default('PERLU PERAWATAN');
        $table->timestamps();
    });
}


    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('perawatan_alat');
    }
};
