<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddForeignKeysToPeminjamanTable extends Migration
{
    public function up()
    {
        Schema::table('peminjaman', function (Blueprint $table) {
            // Kalau belum ada kolom user_id atau alat_id, tambahkan dulu:
            // $table->unsignedBigInteger('user_id');
            // $table->unsignedBigInteger('alat_id');

            $table->foreign('user_id')->references('id')->on('users')->onDelete('cascade');
            $table->foreign('alat_id')->references('id')->on('alat_medis')->onDelete('cascade');
        });
    }

    public function down()
    {
        Schema::table('peminjaman', function (Blueprint $table) {
            $table->dropForeign(['user_id']);
            $table->dropForeign(['alat_id']);
        });
    }
}
