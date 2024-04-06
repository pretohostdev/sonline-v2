<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Produto>
 */
class ProdutoFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'nome' => $this->faker->name,
            'descricao'=> $this->faker->sentence,
            'preco'=> $this->faker->randomFloat($nbMaxDecimals = 2, $min = 0, $max = 1000),
            'marca'=> $this->faker->randomElement(['marca1', 'marca2', 'marca3']),
            'imagem'  =>  $this->faker->imageUrl,
        ];
    }
}
