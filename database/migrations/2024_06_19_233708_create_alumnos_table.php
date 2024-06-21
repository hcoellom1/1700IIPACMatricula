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
        Schema::create('alumnos', function (Blueprint $table) {
            $table->id('numeroCuenta');
            $table->string('nombre', 50);
            $table->string('apellido', 50);
            $table->string('correo', 100);
            $table->string('telefono', 20);
            $table->string('estado', 1);
            $table->integer('codigoCarrera');
            $table->timestamp('fechaIngreso');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('alumnos');
    }
};
