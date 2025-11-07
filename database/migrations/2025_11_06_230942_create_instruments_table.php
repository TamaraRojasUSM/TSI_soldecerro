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
        Schema::create('instruments', function (Blueprint $table) {
            $table->id();
            $table->string('seccion');
            $table->timestamp('inscripcion_at');
            $table->integer('tipo_adquisicion');
            $table->string('origen');
            $table->integer('disponibilidad');
            $table->integer('estado');
            $table->integer('ubicacion');
            $table->timestamp('ultima_mantencion_at');
            $table->text('observaciones')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('instruments');
    }
};
