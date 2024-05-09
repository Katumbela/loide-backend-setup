<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Mes;

class MesSeeder extends Seeder
{
    public function run()
    {
        Mes::create([
            'cod_mes' => 1,
            'descricao' => 'Janeiro'
        ]);

        Mes::create([
            'cod_mes' => 2,
            'descricao' => 'Fevereiro'
        ]);

        Mes::create([
            'cod_mes' => 3,
            'descricao' => 'Março'
        ]);

        Mes::create([
            'cod_mes' => 4,
            'descricao' => 'Abril'
        ]);

        Mes::create([
            'cod_mes' => 5,
            'descricao' => 'Maio'
        ]);

        Mes::create([
            'cod_mes' => 6,
            'descricao' => 'Junho'
        ]);

        Mes::create([
            'cod_mes' => 7,
            'descricao' => 'Julho'
        ]);

        Mes::create([
            'cod_mes' => 8,
            'descricao' => 'Agosto'
        ]);

        Mes::create([
            'cod_mes' => 9,
            'descricao' => 'Setembro'
        ]);

        Mes::create([
            'cod_mes' => 10,
            'descricao' => 'Outubro'
        ]);

        Mes::create([
            'cod_mes' => 11,
            'descricao' => 'Novembro'
        ]);

        Mes::create([
            'cod_mes' => 12,
            'descricao' => 'Dezembro'
        ]);
    }
}