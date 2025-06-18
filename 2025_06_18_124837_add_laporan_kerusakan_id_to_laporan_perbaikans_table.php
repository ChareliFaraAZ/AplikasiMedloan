<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        if (!Schema::hasColumn('laporan_perbaikans', 'laporan_kerusakan_id')) {
            Schema::table('laporan_perbaikans', function (Blueprint $table) {
                $table->unsignedBigInteger('laporan_kerusakan_id')->after('id');
                $table->foreign('laporan_kerusakan_id')
                      ->references('id')
                      ->on('laporan_kerusakan')
                      ->onDelete('cascade');
            });
        }
    }

    public function down(): void
    {
        Schema::table('laporan_perbaikans', function (Blueprint $table) {
            if (Schema::hasColumn('laporan_perbaikans', 'laporan_kerusakan_id')) {
                $table->dropForeign(['laporan_kerusakan_id']);
                $table->dropColumn('laporan_kerusakan_id');
            }
        });
    }
};
