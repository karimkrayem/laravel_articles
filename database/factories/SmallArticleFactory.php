<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\SmallArticle>
 */
class SmallArticleFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            'text' => $this->faker->text($maxNbChars = 100),
            'author_id' => $this->faker->numberBetween(1, 10),
        ];
    }
}
