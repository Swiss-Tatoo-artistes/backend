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
        Schema::create('style_traductions', function (Blueprint $table) {
            $table->id();
            $table->string('language_translate', 100);
            $table->string('name', 255);
            $table->string('description', 255)->nullable(true);
            $table->foreignId('style_id')
            ->constrained()
            ->onUpdate('cascade')
            ->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('style_traductions');
    }
};
