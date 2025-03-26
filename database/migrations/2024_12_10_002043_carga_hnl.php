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
        Schema::create('tipo_cargahnl', function (Blueprint $table) {
            $table->id();
            $table->string('nombre');
            $table->string('descripcion');
        });

        Schema::create('carga_hnl', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('periodo_id'); 
            $table->unsignedBigInteger('tipo_id'); 
            $table->unsignedBigInteger('profile_id');
            $table->integer('horasSemanales');

            $table->foreign('periodo_id')->references('id')->on('periodos');
            $table->foreign('tipo_id')->references('id')->on('tipo_cargahnl');
            $table->foreign('profile_id')->references('id')->on('profiles');
        });

        Schema::create('detalle_chnl', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('carga_hnl_id'); 
            $table->string('nombre');
            $table->string('descripcion');
            $table->integer('horasSemanales');

            $table->foreign('carga_hnl_id')->references('id')->on('carga_hnl');
        });

        Schema::create('aulas', function (Blueprint $table) {
            $table->id();
            $table->string('nombre'); 
            $table->integer('piso');
            $table->string('referencia');
            $table->string('lugar');
            $table->integer('capacidad');
            $table->string('edificio');
        });
        
        Schema::create('horario_chnl', function (Blueprint $table) {
            $table->id();
            $table->string('dia'); 
            $table->time('hora_inicio');
            $table->time('hora_fin');
            $table->unsignedBigInteger('detalle_chnl_id');
            $table->unsignedBigInteger('aula_id');

            $table->foreign('detalle_chnl_id')->references('id')->on('detalle_chnl');
            $table->foreign('aula_id')->references('id')->on('aulas');
        });

        Schema::create('horario_chl', function (Blueprint $table) {
            $table->id();
            $table->string('dia'); 
            $table->string('tipo'); 
            $table->time('hora_inicio');
            $table->time('hora_fin');
            $table->unsignedBigInteger('detalle_chl_id');
            $table->unsignedBigInteger('aula_id');

            $table->foreign('detalle_chl_id')->references('id')->on('detalle_chl');
            $table->foreign('aula_id')->references('id')->on('aulas');
        });

        Schema::create('documentos', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('periodo_id'); 
            $table->unsignedBigInteger('profile_id');
            $table->string('tipo'); 
            $table->char('estado');
            $table->timestamp('fecha_generacion'); // Agregar el campo de fecha y hora
        
            $table->foreign('periodo_id')->references('id')->on('periodos');
            $table->foreign('profile_id')->references('id')->on('profiles');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('tipo_cargahnl');
        Schema::dropIfExists('carga_hnl');
        Schema::dropIfExists('detalle_chnl');
        Schema::dropIfExists('aulas');
        Schema::dropIfExists('horario_chnl');
        Schema::dropIfExists('horario_chl');
        Schema::dropIfExists('documentos');
    }
};
