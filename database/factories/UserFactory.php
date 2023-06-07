<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Facades\Hash;
/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Model>
 */
class UserFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        $nome = $this->faker->unique()->word;

        return [
            'role' => $this->faker->numberBetween($min = 1, $max = 2),
            'nome' => $nome,
            'email' => $nome.'@WEBcko.com',
            'password'=> Hash::make($this->faker->password),
            'telefone' => $this ->faker->numerify('#######-####'),
            'cpf' => $this ->faker->numerify('###.###.###-##'),
            'peso' => $this-> faker->unique()->numberBetween($min = 50, $max = 200),
            'altura' => $this-> faker->unique()->numberBetween($min = 100, $max = 220),
            'cep' =>$this->faker->numerify('#####-###'),
            'numero_casa' =>$this->faker->numberBetween($min = 1, $max = 900),
            'data_nascimento' =>$this->faker->dateTimeThisMonth()->format('Y-m-d H:i:s'),
        ];
    }
}
