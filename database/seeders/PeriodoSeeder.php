<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Periodo;

class PeriodoSeeder extends Seeder
{
    public function run()
    {
        Periodo::create([
            'cod_periodo' => 1,
            'descricao' => 'Manhã'
        ]);

        Periodo::create([
            'cod_periodo' => 2,
            'descricao' => 'Tarde'
        ]);

        Periodo::create([
            'cod_periodo' => 3,
            'descricao' => 'Noite'
        ]);
 
    }
}