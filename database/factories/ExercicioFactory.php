<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\GrupoMuscular;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Exercicio>
 */
class ExercicioFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'grupo_muscular_id' => GrupoMuscular::pluck('id')->random(),
            'nome' => $this->faker->unique()->word,
        ];
    }
}
