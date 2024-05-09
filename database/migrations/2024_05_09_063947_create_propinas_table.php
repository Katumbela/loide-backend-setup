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
        Schema::create('propinas', function (Blueprint $table) {

            $table->unsignedBigInteger('cod_propina')->primary()->autoIncrement();
            $table->decimal('valor', 10, 2); // Decimal com 10 digitos totais e 2 decimais 
            $table->string('data');
            $table->bigInteger('n_matricula');
            $table->bigInteger('cod_mes');
            $table->timestamps();

            // Chaves estrangeiras
            $table->foreign('n_matricula')->references('n_matricula')->on('matriculas')->onDelete('cascade');
            $table->foreign('cod_mes')->references('cod_mes')->on('mes')->onDelete('cascade');
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('propinas');
    }
};