<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Curso;

class CursoSeeder extends Seeder
{
    public function run()
    {
        // Cursos da 1ª à 9ª classe com 'tipo_curso' vazio
        for ($i = 1; $i <= 9; $i++) {
            Curso::create([
                'cod_curso' => $i,
                'descricao' => $i . 'ª classe',
                'tipo_curso' => ''
            ]);
        }

        // Tipos de curso para as classes 10ª, 11ª e 12ª
        $tipos_cursos = [
            'Ciencias Fisicas e Biologicas',
            'Ciências Econômicas e Jurídicas',
            'Direito'
        ];

        // Cursos para as classes 10ª, 11ª e 12ª com tipos de curso específicos
        for ($i = 10; $i <= 12; $i++) {
            Curso::create([
                'cod_curso' => $i, // Para garantir que os códigos de curso sejam de 1 a 3
                'descricao' => $i . 'ª classe',
                'tipo_curso' => $tipos_cursos[$i - 10] // Para garantir que a lista de tipos de curso seja percorrida corretamente
            ]);
        }
    }
}
