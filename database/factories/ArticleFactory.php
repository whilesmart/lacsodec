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
    public function definition(): array
    {
        return [
            'title' => $this->faker->sentence,
            'content' => $this->faker->paragraph,
            'author' => $this->faker->numberBetween(1,10),
            'published_at' => $this->faker->dateTimeBetween($startDate = '-2 years', $endDate = 'now')->format('Y-m-d'),
            'category' => $this->faker->word,
            'slug' => $this->faker->unique()->slug,
            'image' => 'https://contenthub-static.grammarly.com/blog/wp-content/uploads/2022/08/BMD-3398.png',
            'description' => $this->faker->paragraph,
        ];
    }
}
