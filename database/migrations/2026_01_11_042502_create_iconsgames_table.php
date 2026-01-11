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
        Schema::create('iconsgames', function (Blueprint $table) {
            $table->id();
            $table->integer('order')->default(0);
            $table->boolean('is_active')->default(0);
            $table->foreignId('daftar_game_id')->constrained('daftar_games')->cascadeOnDelete();
            $table->string('name');
            $table->string('games');
            $table->string('gambar');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('iconsgames');
    }
};
