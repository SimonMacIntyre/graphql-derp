<?php

namespace Database\Factories;

use App\Models\User;
use Illuminate\Database\Eloquent\Factories\Factory;

class PostFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'author_id' => User::inRandomOrder()->first() ?: User::factory()->create(),
            'title'     => $this->faker->sentence(3),
            'content'   => $this->faker->paragraph(2),
        ];
    }
}
