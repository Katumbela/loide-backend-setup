<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        User::create([
            'name' => 'Joao Afonso Katumbela',
            'role' => 'Admin',
            'email' => 'katumbela@sistema.com',
            'password' => bcrypt('123456') // Você deve criptografar a senha usando a função bcrypt()
        ]);

        User::create([
            'name' => 'Loide Gada',
            'role' => 'Admin',
            'email' => 'loide@sistema.com',
            'password' => bcrypt('outrasenha')
        ]);

        User::create([
            'name' => 'Katumnbela ',
            'role' => 'editor',
            'email' => 'john@sistema.com',
            'password' => bcrypt('outrasenha')
        ]);
    }
}