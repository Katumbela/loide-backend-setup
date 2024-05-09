<?php

namespace Database\Seeders;

use App\Models\Periodo;
use App\Models\User;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // User::factory(10)->create();

        /* User::factory(10)->create([
            'name' => 'Test User',
            'email' => 'test@example.com',
        ]); */

        $this->call(UserSeeder::class);
        $this->call(MesSeeder::class);
        $this->call(PeriodoSeeder::class);
        $this->call(CursoSeeder::class);
        $this->call(AlunoSeeder::class);
        $this->call(MatriculaSeeder::class);
    }
}