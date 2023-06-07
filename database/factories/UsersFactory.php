<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Model>
 */
class UsersFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'ativo' => '1',
            'role' => $this->faker->randomNumber(1,2),
            'nome' => $this ->faker->unique()->word,
            'email' =>$this ->faker->unique()->$nome.'@WEBcko.com',
            'password'=> $this ->Hash::create($faker->password),
            'telefone' => $this ->faker->numerify('#######-####'),
            'cpf' => $this ->faker->numerify('###.###.###-##'),
            'peso' => $this ->faker->randomNumber(60,200),
            'altura' => $this->faker->randomNumber(110,220),
            'cep' =>$this->faker->numerify('#####-###'),
            'numero_casa' =>$this->randomNumber(),
            'data_nascimento' =>$this->dateTimeThisCentury->format('d/m/Y'),
        ];
    }
}
