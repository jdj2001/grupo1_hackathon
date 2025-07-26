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
        Schema::create('alertas', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('ficha_preclinica_id');
            $table->unsignedBigInteger('usuario_id'); // médico que emitió la alerta
            $table->text('mensaje');
            $table->boolean('leida')->default(false);
            $table->timestamps();

            $table->foreign('ficha_preclinica_id')->references('id')->on('ficha_preclinicas')->onDelete('cascade');
            $table->foreign('usuario_id')->references('id')->on('users')->onDelete('cascade');
        });
    }


    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('alertas');
    }
};
