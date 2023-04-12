<?php

namespace Database\Factories;

use App\Models\Project;
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
        $color = $this->faker->randomElement(Project::getAvailableTextColors());
        $iconname = $this->faker->randomElement(Project::getAvailableIcons());

        return [
            'name' => fake()->unique()->word(2, true),
            'description' => fake()->sentence(),
            'color' => $color,
            'icon_name' => $iconname,

        ];
    }
}
