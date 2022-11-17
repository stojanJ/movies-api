<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\Movie;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Movie>
 */
class MovieFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    protected $model = Movie::class;
    public function definition()
    {
        return [
            'title' => $this->faker->title,
            'director' => $this->faker->name,
            'imageUrl' => $this->faker->string,
            'duration' => $this->fake->int,
            'releaseDate' => $this->fake->date,
            'genre' => $this->fake->string
        ];
    }
}
