<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Course>
 */
class CourseFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
        'course_key' => $this->faker->unique()->bothify('ROB###'),
        'title' => $this->faker->sentence(3),
        'cover' => $this->faker->imageUrl(),
        'content' => $this->faker->paragraph(),
        'didactic_material' => $this->faker->paragraph(),
        'robotics_kit_id' => $this->faker->numberBetween(1,3),
        ];
    }
}
