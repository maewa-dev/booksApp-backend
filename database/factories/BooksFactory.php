<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class BooksFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'title' => $this->faker->name(),
            'author_id' => $this->faker->numberBetween(1,5),
            'isbn' => $this->faker->bothify('???####??####'),
            'num_page' => $this->faker->numberBetween(100, 1500),
            'publish_date' => $this->faker->date(),
            'image' => $this->faker->image(),
            'sypnosis' => $this->faker->paragraph(),
            'review' => $this->faker->paragraph(),
            'qualification' => $this->faker->numberBetween(1,5),
            'start_date' => $this->faker->date(),
            'end_date' => $this->faker->date(),
            'format_type' => $this->faker->randomElement(['fisico', 'digital']),
            'notes' => $this->faker->paragraph(),
            'collection' => $this->faker->word(),
            'volume' => $this->faker->numberBetween(1, 8),
            'created_at' => now(),
            'updated_at' => now(),
        ];
    }
}

