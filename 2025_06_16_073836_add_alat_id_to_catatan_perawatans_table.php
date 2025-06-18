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
    Schema::table('catatan_perawatans', function (Blueprint $table) {
        $table->unsignedBigInteger('alat_id')->nullable();

        $table->foreign('alat_id')->references('id')->on('alat_medis');
    });
}

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
         Schema::table('catatan_perawatans', function (Blueprint $table) {
        $table->dropForeign(['alat_id']);
        $table->dropColumn('alat_id');
    });
    }
};
