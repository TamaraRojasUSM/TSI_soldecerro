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
        Schema::create('members', function (Blueprint $table) {
            $table->id();
            $table->string('rut')->unique()->index();
            $table->string('nombre');
            $table->boolean('estado');
            $table->boolean('tipo_instrumento');
            $table->timestamp('ingreso_at');
            $table->timestamp('nacimiento_at');
            $table->string('seccion');
            $table->string('direccion');
            $table->string('contacto');
            $table->string('info_adicional')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('members');
    }
};
