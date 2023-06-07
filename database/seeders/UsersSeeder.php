<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;
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
        // User::create([
        //     'role' => '1',
        //     'nome' => 'Emilio Anastacio',
        //     'email' => 'emilio@WEBcko.com',
        //     'password' => Hash::make('12345'),
        //     'telefone' => '459991-2399',
        //     'cpf' => '834.356.314-34',
        //     'peso' => '60',
        //     'altura' => '120',
        //     'cep' => '85855-000',
        //     'numero_casa' => '10',
        //     'data_nascimento' => '20/07/2003',
        // ]);
    }
}
