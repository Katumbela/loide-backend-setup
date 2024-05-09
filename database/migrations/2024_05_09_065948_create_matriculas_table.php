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
        Schema::create('matriculas', function (Blueprint $table) {
            $table->unsignedBigInteger('n_matricula')->primary()->autoIncrement(); // Chave primária
            $table->bigInteger('cod_curso');
            $table->bigInteger('cod_aluno');
            $table->bigInteger('cod_periodo');
            $table->string('data');
            $table->timestamps();

            // Chaves estrangeiras
            $table->foreign('cod_curso')->references('cod_curso')->on('cursos');
            $table->foreign('cod_aluno')->references('cod_aluno')->on('alunos');
            $table->foreign('cod_periodo')->references('cod_periodo')->on('periodos');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('matriculas');
    }
};