<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddStatusAndStokToAlatMedisTable extends Migration
{
    public function up()
    {
        Schema::table('alat_medis', function (Blueprint $table) {
            $table->string('status')->default('tersedia'); // status default 'tersedia'
            $table->integer('stok')->default(1); // stok default 1
        });
    }

    public function down()
    {
        Schema::table('alat_medis', function (Blueprint $table) {
            $table->dropColumn(['status', 'stok']);
        });
    }
}
