<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Article>
 */
class ArticleFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            'title' => $this->faker->unique()->word,
            'text' => $this->faker->text($maxNbChars = 200),
            'author_id' => $this->faker->numberBetween(1, 10),
            'src' => $this->faker->imageUrl(width: 620, height: 480),
        ];
    }
}
