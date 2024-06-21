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
        Schema::create('formas', function (Blueprint $table) {
            $table->integer('idClase');
            $table->integer('numeroCuenta');
            $table->string('periodo', 4);
            $table->integer('nota')->nullable();
            $table->string('seccion', 10);            
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('formas');
    }
};
