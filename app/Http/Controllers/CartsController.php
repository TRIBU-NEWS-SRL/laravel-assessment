<?php

namespace App\Http\Controllers;

use App\Http\Requests\CartRequest;
use App\Http\Resources\CartResource;
use App\Models\Cart;
use App\Models\User;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;

class CartsController extends Controller
{
    public function show(): JsonResource
    {
        $user = User::find(1);
        $carts = Cart::where('user_id', 1)->get();

        return CartResource::collection($carts)->additional([
            'user' => $user,
        ]);
    }

    public function store(CartRequest $request): JsonResponse
    {
        $validated = $request->validated();

        Cart::create([
            'user_id' => 1,
            'item_id' => $validated['item_id'],
        ]);

        return response()->json(null,204);
    }

    public function destroy(Request $request): JsonResponse
    {
        Cart::query()->where('user_id', 1)->where('item_id', $request->get('item_id'))->firstOrFail()->delete();

        return response()->json(null, 204);
    }
}
