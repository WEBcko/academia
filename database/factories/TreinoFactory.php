<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

$contador = 0;
/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Treino>
 */
class TreinoFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */

    

    public function definition(): array
    {
        $contador ++;
        return [
            'ativo' => '1',
            'codigo_ordem' => $contador,
        ];
    }
}
