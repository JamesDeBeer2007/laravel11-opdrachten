<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Project>
 */
class ProjectFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'name' => $this->faker->words(3, true),
            'description' => $this->faker->paragraph(2),
            'created_at' => $this->faker->dateTimeBetween('-1 week', '+1 week'),
            'updated_at' => $this->faker->dateTimeThisDecade('now', 'Europe/Amsterdam'),
        ];
    }
}
