<?php

namespace Database\Seeders;
use Illuminate\Database\Seeder;
use App\Models\Curso;

class CursoSeeder extends Seeder
{
    public function run()
    {
        Curso::create([
            'cod_curso' => 1,
            'descricao' => 'Engenharia Eletrotécnica',
            'tipo_curso' => 'Bacharelado'
        ]);

        Curso::create([
            'cod_curso' => 2,
            'descricao' => 'Engenharia Informática',
            'tipo_curso' => 'Bacharelado'
        ]);

        Curso::create([
            'cod_curso' => 3,
            'descricao' => 'Engenharia Civil',
            'tipo_curso' => 'Bacharelado'
        ]);

        Curso::create([
            'cod_curso' => 4,
            'descricao' => 'Administração de Empresas',
            'tipo_curso' => 'Bacharelado'
        ]);

        Curso::create([
            'cod_curso' => 5,
            'descricao' => 'Medicina',
            'tipo_curso' => 'Bacharelado'
        ]);

        Curso::create([
            'cod_curso' => 6,
            'descricao' => 'Direito',
            'tipo_curso' => 'Bacharelado'
        ]);

        Curso::create([
            'cod_curso' => 7,
            'descricao' => 'Ciência da Computação',
            'tipo_curso' => 'Bacharelado'
        ]);

        Curso::create([
            'cod_curso' => 8,
            'descricao' => 'Arquitetura',
            'tipo_curso' => 'Bacharelado'
        ]);

        Curso::create([
            'cod_curso' => 9,
            'descricao' => 'Psicologia',
            'tipo_curso' => 'Bacharelado'
        ]);

        Curso::create([
            'cod_curso' => 10,
            'descricao' => 'Economia',
            'tipo_curso' => 'Bacharelado'
        ]); 
    }
}