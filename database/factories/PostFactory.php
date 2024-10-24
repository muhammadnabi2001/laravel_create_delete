<?php

namespace Database\Factories;

use App\Models\post;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\post>
 */
class PostFactory extends Factory
{
    protected $model=post::class;
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'title'=>fake()->title(),
            'body'=>fake()->text(10),
            'category_id'=>$this->faker->numberBetween(1,50),
            'like'=>rand(0,1),
            'dislike'=>rand(0,1)
        ];
    }
}
