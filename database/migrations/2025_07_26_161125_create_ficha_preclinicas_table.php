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
        Schema::create('ficha_preclinicas', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('paciente_id');
            $table->unsignedBigInteger('usuario_id'); // promotor que tomó los datos
            $table->date('fecha');
            $table->string('temperatura', 10)->nullable();
            $table->string('presion_arterial', 20)->nullable();
            $table->string('frecuencia_cardiaca', 10)->nullable();
            $table->string('frecuencia_respiratoria', 10)->nullable();
            $table->float('peso')->nullable();
            $table->float('estatura')->nullable();
            $table->text('observaciones')->nullable();
            $table->timestamps();

            $table->foreign('paciente_id')->references('id')->on('pacientes')->onDelete('cascade');
            $table->foreign('usuario_id')->references('id')->on('users')->onDelete('cascade');
        });
    }


    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('ficha_preclinicas');
    }
};
