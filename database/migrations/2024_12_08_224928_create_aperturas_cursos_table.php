<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up()
    {
        Schema::create('aperturas_cursos', function (Blueprint $table) {
            $table->id();

            // Relaciones con las tablas correspondientes
            $table->unsignedBigInteger('curso_id');
            $table->foreign('curso_id')->references('id')->on('cursos')->onDelete('cascade');

            $table->unsignedBigInteger('periodo_id');
            $table->foreign('periodo_id')->references('id')->on('periodos')->onDelete('cascade');

            $table->unsignedBigInteger('usuario_id'); // Referencia al usuario que crea la apertura
            $table->foreign('usuario_id')->references('id')->on('users')->onDelete('cascade');
            $table->enum('tipo_apertura', ['Regular', 'Repetidores'])->default('Regular');
            // Timestamps si es necesario
            $table->timestamps();

            // Campo de estado
            $table->char('estado')->default('1');
        });
       
    }
    
    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('aperturas_cursos');
    }



};
