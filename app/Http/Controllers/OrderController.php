<?php

namespace App\Http\Controllers;

use App\Actions\PayCart;
use App\Models\Cart;

class OrderController extends Controller
{
    public function store()
    {
        $cart = Cart::where('user_id', 1)->get();

        (new PayCart)->execute($cart);

        return response()->json(null, 201);
    }
}
