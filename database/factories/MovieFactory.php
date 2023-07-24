<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\Movie;
use App\Models\User;

class MovieFactory extends Factory
{
    protected $model = Movie::class;
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
                'title' => $this->faker->sentence,
                'description' => $this->faker->paragraph,
                'rating' => $this->faker->numberBetween(1, 10),
                'user_id' => User::factory()->create()->id,
        ];
    }
}
