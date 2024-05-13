<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Post>
 */
class PostFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'titre' => $this->faker->sentence, 
            'contenu' => $this->faker->text(200),
            'user_id' => rand(1, 10),
            'created_at' => $this->faker->dateTimeThisYear,
            'updated_at' => $this->faker->dateTimeThisYear,
        ];
    }
}
