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
        //CRIA VARIOS 
        //TreinoExercicio::factory(5)->create();


        //CRIA UM UNICO TREINO EXERCICIO
        TreinoExercicio::create([
            'ativo' => '1',
            'treino_id' => '1',
            'exercicio_id' => '1',
            'dificuldade' => 'facil',
            'peso' => '20',
            'repeticoes' => '6'
        ]);
    }
}