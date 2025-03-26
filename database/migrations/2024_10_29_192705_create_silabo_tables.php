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
        Schema::create('silabos', function (Blueprint $table) {
            $table->id();

            $table->text('sumilla')->nullable();
            $table->text('unidad_competencia')->nullable();
            $table->text('competencia_general')->nullable();
            $table->char('visado')->default('0');
            $table->text('comentario')->nullable();

            // $table->string('sede');

            $table->unsignedBigInteger('carrera_id');
            $table->foreign('carrera_id')->references('id')->on('carreras')->onDelete('cascade');

            $table->unsignedBigInteger('curso_id');
            $table->foreign('curso_id')->references('id')->on('cursos')->onDelete('cascade');

            $table->unsignedBigInteger('periodo_id');
            $table->foreign('periodo_id')->references('id')->on('periodos')->onDelete('cascade');

            $table->char('estado')->default('1');
        });

        Schema::create('evaluacions', function (Blueprint $table) {
            $table->id();

            $table->text('evaluacion');

            $table->unsignedBigInteger('silabo_id');
            $table->foreign('silabo_id')->references('id')->on('silabos')->onDelete('cascade');

            $table->char('estado')->default('1');
        });

        Schema::create('organizacions', function (Blueprint $table) {
            $table->id();

            $table->integer('hte1u');
            $table->integer('hte2u');
            $table->integer('hte3u');
            $table->integer('hpr1u');
            $table->integer('hpr2u');
            $table->integer('hpr3u');
            $table->integer('hre1u');
            $table->integer('hre2u');
            $table->integer('hre3u');

            $table->unsignedBigInteger('silabo_id');
            $table->foreign('silabo_id')->references('id')->on('silabos')->onDelete('cascade');

            $table->char('estado')->default('1');
        });

        Schema::create('tutorias', function (Blueprint $table) {
            $table->id();

            // $table->text('proposito');
            $table->string('dia');
            $table->string('horario');
            $table->string('lugar');

            $table->unsignedBigInteger('silabo_id');
            $table->foreign('silabo_id')->references('id')->on('silabos')->onDelete('cascade');

            $table->char('estado')->default('1');
        });

        Schema::create('promedios', function (Blueprint $table) {
            $table->id();

            $table->string('pu1');
            $table->string('pu2');
            $table->string('pu3');
            $table->string('pp');

            $table->unsignedBigInteger('silabo_id');
            $table->foreign('silabo_id')->references('id')->on('silabos')->onDelete('cascade');

            $table->char('estado')->default('1');
        });

        Schema::create('referencias', function (Blueprint $table) {
            $table->id();

            $table->text('referencia');

            $table->unsignedBigInteger('silabo_id');
            $table->foreign('silabo_id')->references('id')->on('silabos')->onDelete('cascade');

            $table->char('estado')->default('1');
        });

        Schema::create('silabo_docentes', function (Blueprint $table) {
            $table->id();

            $table->unsignedBigInteger('profile_id');
            $table->unsignedBigInteger('silabo_id');

            $table->foreign('profile_id')->references('id')->on('profiles')->onDelete('cascade');
            $table->foreign('silabo_id')->references('id')->on('silabos')->onDelete('cascade');

            $table->string('condicion');

            $table->char('estado')->default('1');
        });

        Schema::create('resultados', function (Blueprint $table) {
            $table->id();

            $table->text('resultado');

            $table->char('estado')->default('1');
        });

        Schema::create('silabo_resultados', function (Blueprint $table) {
            $table->id();

            $table->unsignedBigInteger('resultado_id');
            $table->unsignedBigInteger('silabo_id');

            $table->foreign('resultado_id')->references('id')->on('resultados')->onDelete('cascade');
            $table->foreign('silabo_id')->references('id')->on('silabos')->onDelete('cascade');

            $table->char('estado')->default('1');
        });

        Schema::create('unidads', function (Blueprint $table) {
            $table->id();

            $table->string('unidad');
            $table->string('titulo');
            $table->text('capacidades');
            $table->text('resultados');

            $table->char('estado')->default('1');
        });

        Schema::create('programacions', function (Blueprint $table) {
            $table->id();

            $table->text('contenido');
            $table->text('estrategias');
            $table->text('evidencias');
            $table->text('instrumentos');

            $table->integer('semana');

            $table->char('estado')->default('1');
        });

        Schema::create('unidad_programacions', function (Blueprint $table) {
            $table->id();

            $table->unsignedBigInteger('programacion_id');
            $table->foreign('programacion_id')->references('id')->on('programacions')->onDelete('cascade');

            $table->unsignedBigInteger('unidad_id');
            $table->foreign('unidad_id')->references('id')->on('unidads')->onDelete('cascade');

            $table->unsignedBigInteger('silabo_id');
            $table->foreign('silabo_id')->references('id')->on('silabos')->onDelete('cascade');

            $table->char('estado')->default('1');
        });

    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('silabos');
        Schema::dropIfExists('evaluacions');
        Schema::dropIfExists('organizacions');
        Schema::dropIfExists('tutorias');
        Schema::dropIfExists('promedios');
        Schema::dropIfExists('referencias');
        Schema::dropIfExists('docentes');
        Schema::dropIfExists('silabo_docentes');
        Schema::dropIfExists('resultados');
        Schema::dropIfExists('silabo_resultados');
        Schema::dropIfExists('unidads');
        Schema::dropIfExists('programacions');
        Schema::dropIfExists('unidad_programacions');
    }
};
