<?php

namespace Database\Factories;

use App\Models\Cart;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Order>
 */
class OrderFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        $carts = Cart::factory()->count(5)->create();
        return [
            'user_id' => 1,
            'items' => '['.$carts->pluck('item_id')->join(',').']',
        ];
    }
}
