<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Treino;

class TreinoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //cria varios
        Treino::factory(5)->create();

        //Cria apenas um
        // Treino::create([
        //     'ativo' => '1',
        //     'codigo_ordem' => '1',
        // ]);
    }
}
