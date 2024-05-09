<?php

namespace Database\Seeders;

use App\Models\Matricula;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class MatriculaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Matricula::create([
            "n_matricula" => 1,
            "cod_curso" => 3,
            "cod_aluno" => 510,
            "cod_periodo" => 1,
            "data" => "2024-06-12"
        ]);
        Matricula::create([
            "n_matricula" => 2,
            "cod_curso" => 7,
            "cod_aluno" => 509,
            "cod_periodo" => 2,
            "data" => "2024-06-15"
        ]);
    }
}