<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Blog>
 */
class BlogFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            //
            'titulo' => $this->faker->title(),
            'cuerpo' => $this->faker->paragraph(),
            'categoria' => $this->faker->word(),
            'imagen' => $this->faker->imageUrl(640, 480, 'animals', true)
        ];
    }
}
