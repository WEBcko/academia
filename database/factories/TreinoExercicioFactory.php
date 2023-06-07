<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use \App\Models\Treino;
use \App\Models\Exercicio;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\TreinoExercicio>
 */
class TreinoExercicioFactory extends Factory
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
            'treino_id' => Treino::pluck('id')->random(),
            'exercicio_id' => Exercicio::pluck('id')->random(),
            'dificuldade' => $this->faker->word,
            'peso' => $this->faker->randomNumber(10,200),
            'repeticoes' => $this->faker->randomNumver(2,10),
        ];
    }
}
