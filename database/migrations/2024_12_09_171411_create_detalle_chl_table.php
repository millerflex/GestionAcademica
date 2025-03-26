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
        Schema::create('detalle_chl', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('IdCargaHL'); 
            $table->unsignedBigInteger('IdCursoAperturado'); 
            $table->integer('horasSemanales'); 
            $table->timestamps();

            
            $table->foreign('IdCargaHL')->references('id')->on('carga_hl');
            $table->foreign('IdCursoAperturado')->references('id')->on('aperturas_cursos');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('detalle_chl');
    }
};
