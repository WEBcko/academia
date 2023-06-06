<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\TreinoExercicio;

class TreinoExercicioSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        TreinoExercicio::create([

            'treino_id' => '1',
            'exercicio_id' => '1',
            'dificuldade' => 'facil',
            'peso' => '20Kg',
            'repeticoes' => '6'

        ]);
    }
}
