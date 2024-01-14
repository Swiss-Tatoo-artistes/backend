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
        Schema::create('tattoo_artists', function (Blueprint $table) {
            $table->id('id_tattoo_artist');
            $table->string('lastname', 255);
            $table->string('name', 255);
            $table->string('presentation', 300)->nullable();
            $table->string('pseudo', 25);
            $table->integer('home_phone')->nullable();
            $table->integer('phone');
            $table->string('mail', 255);
            $table->string('facebook_sociallink', 255)->nullable();
            $table->string('instagram_sociallink', 255)->nullable();
            $table->string('x_sociallink', 255)->nullable();
            $table->string('tiktok_sociallink', 255)->nullable();
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
