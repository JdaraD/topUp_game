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
        Schema::create('riwayat_pembelians', function (Blueprint $table) {
            $table->id();
            $table->string('order_id')->unique();
            $table->integer('order')->default(0);
            $table->boolean('is_active')->default(0);
            $table->string('Mid');
            $table->string('server');
            $table->foreignId('daftar_game_id')->constrained('daftar_games')->cascadeOnDelete();
            $table->foreignId('price_game_id')->constrained('price_games')->cascadeOnDelete();
            $table->unsignedInteger('qty');
            $table->string('email',50);
            $table->string('noWa',20);
            $table->string('harga');
            $table->string('diskon');
            $table->enum('status',['Pending','Gagal','Berhasil'])->default('Pending');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('riwayat_pembelians');
    }
};
