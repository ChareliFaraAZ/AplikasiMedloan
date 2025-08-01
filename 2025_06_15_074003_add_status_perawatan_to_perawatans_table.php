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
        Schema::table('perawatans', function (Blueprint $table) {
             $table->string('status_perawatan')->default('PERLU PERAWATAN');
            //
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
      Schema::table('perawatans', function (Blueprint $table) {
        $table->dropColumn('status_perawatan');
            
        });
    }
};
