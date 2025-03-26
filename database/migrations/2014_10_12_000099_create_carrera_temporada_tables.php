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
        Schema::create('carreras', function (Blueprint $table) {
            $table->id();

            $table->string('area');
            $table->string('facultad');
            $table->string('departamento');
            $table->string('programa');

            $table->char('estado')->default('1');
        });

        Schema::create('periodos', function (Blueprint $table) {
            $table->id();
            $table->integer('año');
            $table->string('semestre');
            $table->date('inicio');
            $table->date('termino');
            $table->char('activo')->default('1');
        });

        Schema::create('cursos', function (Blueprint $table) {
            $table->id();

            $table->string('nombre');
            $table->integer('ciclo');
            $table->string('codigo');
            $table->integer('creditos');
            $table->integer('HT');
            $table->integer('HP');
            $table->integer('HL');
            $table->string('requisitos');
            $table->string('tipo');

            $table->char('estado')->default('1');
            $table->integer('carrera_id');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('carreras');
        Schema::dropIfExists('periodos');
        Schema::dropIfExists('cursos');
    }
};
