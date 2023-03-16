<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Foundation\Auth\User;
use Illuminate\Support\Str;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Model>
 */
class TaskFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'title' => Str::random(),
            'description' => fake()->text(),
            'type' => rand(0, 3),
            'status' => rand(0, 1),
            'start_date' => now(),
            'due_date' => now(),
            'assignee' => User::all()->random()->id,
            'estimate' => fake()->randomFloat(),
            'actual' => fake()->randomFloat(),
        ];
    }
}
