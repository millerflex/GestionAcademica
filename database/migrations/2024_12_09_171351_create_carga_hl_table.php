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
        Schema::create('carga_hl', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('IdSemestre');
            $table->unsignedBigInteger('IdProfile');
            $table->timestamps();
            $table->foreign('IdSemestre')->references('id')->on('periodos');
            $table->foreign('IdProfile')->references('id')->on('profiles');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('carga_hl');
    }
};
