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
        Schema::disableForeignKeyConstraints();
        Schema::create('tattoo_artists', function (Blueprint $table) {
            $table->id();
            $table->string('presentation', 300)->nullable();
            $table->integer('home_phone')->nullable();
            $table->integer('phone');
            $table->string('facebook_sociallink', 255)->nullable();
            $table->string('instagram_sociallink', 255)->nullable();
            $table->string('x_sociallink', 255)->nullable();
            $table->string('tiktok_sociallink', 255)->nullable();
            $table->foreignId('user_id')
            ->constrained()
            ->onUpdate('restrict')
            ->onDelete('restrict');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('tattoo_artists');
    }
};
