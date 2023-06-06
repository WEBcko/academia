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
        User::create([

            'role' => '1',
            'name' => 'Emilio Anastacio',
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
