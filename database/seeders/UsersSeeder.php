<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\User;

class UsersSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //PARA CRIAR VARIOS!!!
        User::factory(5)->create();

        //PARA CRIAR APENAS UM USUARIO ESPECIFICO
        User::create([
            'ativo' => '1',
            'role' => '1',
            'nome' => 'Emilio Anastacio',
            'email' => 'emilio@WEBcko.com',
            'password' => Hash::create('12345'),
            'telefone' => '459991-2399',
            'cpf' => '834.356.314-34',
            'peso' => '60Kg',
            'altura' => '120Cm',
            'cep' => '85855-000',
            'numero_casa' => '10',
            'data_nascimento' => '20/07/2003',
        ]);
    }
}
