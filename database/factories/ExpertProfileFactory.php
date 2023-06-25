<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\ExpertProfile>
 */
class ExpertProfileFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'user_id' => $this->faker->numberBetween(1, 10),
            'location' => $this->faker->city(),
            'status' => $this->faker->randomElement(['available', 'busy', 'on vacation']),
            'details' => $this->faker->paragraphs(3, true),
            'birthday' => $this->faker->date(),
            'sex' => $this->faker->randomElement(['Male', 'Female']),
            'birth_place' => $this->faker->city(),
            'nationality' => $this->faker->country(),
            'language' => $this->faker->languageCode(),
            'image' => $this->faker->imageUrl(),
            'company' => $this->faker->company(),
            'work_duration' => $this->faker->numerify('# year(s)'),
            'certification' => $this->faker->sentence(),
            'certification_date' => $this->faker->date(),
            'certification_image' => $this->faker->imageUrl(),
        ];
    }
}
