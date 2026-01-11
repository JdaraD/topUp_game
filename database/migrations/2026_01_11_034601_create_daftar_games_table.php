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
        Schema::create('daftar_games', function (Blueprint $table) {
            $table->id();
            $table->integer('order')->default(0);
            $table->boolean('is_active')->default(0);
            $table->string('name');
            $table->string('publisher');
            $table->string('gambar');
            $table->longText('deskripsi');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('daftar_games');
    }
};
