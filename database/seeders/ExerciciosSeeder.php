<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Exercicio;

class ExerciciosSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //CRA VARUAS UNIDADES
        Exercicio::factory(10)->create();

        //CRIA APENAS UMA UNIDADE
        // Exercicio::create([
        //     'grupo_muscular_id' => '1',
        //     'nome' => 'agachamento'
        // ]);
    }
}
