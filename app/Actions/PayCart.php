<?php

namespace App\Actions;

use App\Events\OrderCreated;
use App\Jobs\ProcessPayment;
use App\Models\Cart;
use App\Models\Order;
use Illuminate\Support\Collection;

class PayCart
{
    public function execute(Collection $cart)
    {
        $order = Order::create([
            'user_id' => 1,
            'items' => $cart->pluck('item_id')->toArray(),
            'paid_at' => null,
        ]);

        ProcessPayment::dispatch($order);

        OrderCreated::dispatch($order);

        Cart::where('user_id', 1)->delete();
    }
}
