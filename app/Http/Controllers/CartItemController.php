<?php

namespace App\Http\Controllers;

use App\Models\CartItem;
use App\Http\Controllers\Controller;
use App\Models\Product;
use App\Models\User;
use Illuminate\Http\Request;

class CartItemController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Product $product)
    {
        if (auth()->user()) {

            $cart = User::find(auth()->user()->id)->carts()->where('status', 'فعال')->latest()->get()[0];

            if ($cart->cart_item()->where('product_id', $product->id)->count() > 0) {
                $exiting_product = $cart->cart_item()->where('product_id', $product->id)->get()[0];
                $exiting_product->update(['count' => $exiting_product->count + 1]);

                return redirect()->back()->with('success', 'تعداد محصول در سبد خرید بروزرسانی شد');
            } else {
                $cart->cart_item()->create([
                    'product_id' => $product->id,
                    'count' => 1
                ]);
                return redirect()->back()->with('success', 'محصول به سبد خرید اضافه شد');
            }
        } else {
            $cart = session('cart', []);

            if (isset($cart[$product->id])) {
                // product is already in shopping cart, increment the amount
                $cart[$product->id]['count'] += 1;
            } else {
                // fetch the product and add 1 to the shopping cart

                $cart[$product->id] = [
                    'id' => $product->id,
                    'count'    => 1,
                ];
            }

            // update the session data (this equals Session::put() )
            session(['cart' => $cart]);
            return redirect()->back()->with('success', 'محصول به سشن سبد خرید اضافه شد');
        }
    }

    /**
     * Display the specified resource.
     */
    public function show(CartItem $cartItem)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(CartItem $cartItem)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, CartItem $cartItem)
    {
        $this->authorize('update', $cartItem);
        $value = $cartItem->count;
        if ($request->func === "plus") {
            $cartItem->update(['count' => $value + 1]);
        } elseif ($request->func === "min") {
            $cartItem->update(['count' => $value - 1]);
        }

        return redirect()->back();
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(CartItem $cartItem)
    {
        $this->authorize('delete', $cartItem);
        $cartItem->delete();

        return redirect()->back();
    }
}
