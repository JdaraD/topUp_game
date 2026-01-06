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
        Schema::create('color_settings', function (Blueprint $table) {
            $table->id();
            $table->integer('order')->default(0);
            $table->boolean('is_active')->default(0);
            $table->string('name',255);
            $table->string('colorHeader')->default('#ffffff');
            $table->unsignedTinyInteger('colorHeader_opacity')->default(100);
            $table->string('colorBody')->default('#ffffff');
            $table->unsignedTinyInteger('colorBody_opacity')->default(100);
            $table->string('colorFooter')->default('#ffffff');
            $table->unsignedTinyInteger('colorFooter_opacity')->default(100);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('color_settings');
    }
};
