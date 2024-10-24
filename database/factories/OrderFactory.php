<?php

namespace Database\Factories;

use App\Models\Order;
use App\Models\post;
use App\Models\Users;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Types\Model\Posts;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Order>
 */
class OrderFactory extends Factory
{
    protected $model=Order::class;
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'user_id' => Users::inRandomOrder()->first()->id,
            'post_id' => post::inRandomOrder()->first()->id, 
        ];
    }
}
