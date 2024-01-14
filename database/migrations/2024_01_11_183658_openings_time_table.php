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
        Schema::create('openings_time', function (Blueprint $table) {
            $table->id('id_opening_time');
            $table->string('opening_day', 50);
            $table->time('opening_hour', $precison = 0);
            $table->time('closure_hour', $precision = 0);
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('openings_time');
    }
};
