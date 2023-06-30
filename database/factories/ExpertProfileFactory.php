<?php

namespace Database\Factories;

use App\Models\User;
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
            'user_id' => User::all()->random()->id,
            'location' => $this->faker->city(),
            'status' => $this->faker->randomElement(['approved', 'pending', 'rejected']),
            'details' => $this->faker->paragraphs(10, true),
            'birthday' => $this->faker->date(),
            'sex' => $this->faker->randomElement(['Male', 'Female']),
            'birth_place' => $this->faker->city(),
            'nationality' => $this->faker->country(),
            'language' => $this->faker->languageCode(),
            'image' => 'https://img.freepik.com/free-icon/user_318-159711.jpg',
            'company' => $this->faker->company(),
            'work_duration' => $this->faker->numerify('# year(s)'),
            'certification' => $this->faker->sentence(),
            'certification_date' => $this->faker->date(),
            'certification_image' => $this->faker->imageUrl(),
            'position' => $this->faker->jobTitle(),
            'phone_number' => $this->faker->phoneNumber(),
        ];
    }
}
