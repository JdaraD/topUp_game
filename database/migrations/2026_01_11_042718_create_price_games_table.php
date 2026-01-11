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
        Schema::create('price_games', function (Blueprint $table) {
            $table->id();
            $table->integer('order')->default(0);
            $table->boolean('is_active')->default(0);
            $table->foreignId('daftar_game_id')->constrained('daftar_games')->cascadeOnDelete();
            $table->foreignId('iconsgame_id')->constrained('iconsgames')->cascadeOnDelete();
            $table->string('name');
            $table->bigInteger('harga');
            $table->integer('discon')->nullable(0);
            $table->timestamps();

            $table->unique(['daftar_game_id','iconsgame_id']);
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('price_games');
    }
};
