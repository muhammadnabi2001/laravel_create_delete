<?php

namespace Database\Factories;

use App\Models\Product;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Product>
 */
class productFactory extends Factory
{
    protected $model=Product::class;
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'name'=>fake()->name(),
            'category_id'=>$this->faker->numberBetween(1,50),
            'price'=>rand(50,100),
            'count'=>rand(1,50)
        ];
    }
}
