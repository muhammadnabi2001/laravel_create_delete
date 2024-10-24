<?php

namespace Database\Factories;

use App\Models\like;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\likes>
 */
class likeFactory extends Factory
{
    protected $model=like::class;
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'post_id'=>rand(1,50),
            'is_active'=>fake()->title()
        ];
    }
}
