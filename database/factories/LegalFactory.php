<?php

namespace Database\Factories;

use App\Models\Legal;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Legal>
 */
class LegalFactory extends Factory
{
    protected $model = Legal::class;
    
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'type' => fake()->randomElement(['privacy', 'tos']),
            'title' => fake()->sentence(),
            'description' => fake()->text(500),
            'created_at' => now(),
            'updated_at' => now(),
        ];
    }
}
