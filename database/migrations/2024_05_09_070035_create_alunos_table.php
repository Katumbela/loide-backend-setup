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
        Schema::create('alunos', function (Blueprint $table) {
            $table->unsignedBigInteger('cod_aluno')->primary()->autoIncrement();
            $table->string('nome');
            $table->string('data_nascimento');
            $table->string('genero');
            $table->string('morada');
            $table->string('telefone');
            $table->string('bi');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('alunos');
    }
};