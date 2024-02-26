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
            $table->id();
            $table->string('presentation', 300)->nullable();
            $table->string('home_phone')->nullable();
            $table->string('phone');
            $table->string('facebook_sociallink', 255)->nullable();
            $table->string('instagram_sociallink', 255)->nullable();
            $table->string('x_sociallink', 255)->nullable();
            $table->string('tiktok_sociallink', 255)->nullable();
            $table->timestamp('created_at')->useCurrent();
            $table->timestamp('updated_at')->useCurrent();

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
