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
            $table->id();
            $table->string('primerNombre', 60);
            $table->string('segundoNombre',60)->nullable();
            $table->string('primerApellido', 60);
            $table->string('segundoApellido',60);      
            $table->string('correo', 60);
            $table->string('noCuenta', 7);      
            $table->tinyInteger('estado')->default(0);
            $table->timestamp('fecha_registro');
            $table->softDeletes();
            $table->timestamps();
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
