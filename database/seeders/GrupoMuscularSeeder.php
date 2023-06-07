<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\GrupoMuscular;

class GrupoMuscularSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
         //CRIA VARIAS UNIDADE COM NAME ALEATORIO
        GrupoMuscular::factory(5)->create();


        //CRIAR UMA UNICA UNIDADE COM UM NAME DEFINIDO
        // GrupoMuscular::create([
        //     'ativo' => '1',
        //     'nome' => 'perna'
        // ]);
    }
}
