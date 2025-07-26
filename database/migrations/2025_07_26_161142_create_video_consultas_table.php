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
        Schema::create('video_consultas', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('ficha_preclinica_id');
            $table->string('video'); // ruta al video
            $table->text('descripcion')->nullable();
            $table->timestamps();

            $table->foreign('ficha_preclinica_id')->references('id')->on('ficha_preclinicas')->onDelete('cascade');
        });
    }


    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('video_consultas');
    }
};
