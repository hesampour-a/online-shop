<?php

namespace App\services;

use App\Models\Cart;
use App\Models\CartItem;
use App\Models\User;
use Illuminate\Support\Facades\Session;

class MoveCartToDatabase
{
    /**
     * Create a new class instance.
     */
    public function __construct()
    {
        //
    }

    public static function SessionToDatabase(?User $user)
    {
        if (Session::get('cart')) {
            if (User::find($user->id)->carts()->where('status', 'فعال')->exists()) {

                $cart = User::find($user->id)->carts()->where('status', 'فعال')->latest()->get()[0];

                $products = Session::get('cart');
                //dd($products[177]['id']);
                foreach ($products as $product) {

                    //if product alredy exists in cart
                    if (CartItem::where('cart_id', $cart->id)
                        ->where('product_id', $product['id'])
                        ->exists()
                    ) {
                        $p = CartItem::where('cart_id', $cart->id)
                            ->where('product_id', $product['id'])
                            ->get();
                        $p[0]->update(['count' => $p[0]->count + $product['count']]);
                    } else {
                        CartItem::create(
                            [
                                'cart_id' => $cart->id,
                                'product_id' =>  $product['id'],
                                'count' =>  $product['count']
                            ]
                        );
                    }
                }
                Session::forget('cart');
            } else {
                $cart = Cart::create([
                    'user_id' => $user->id,
                    'status' => 'فعال'
                ]);

                $products = Session::get('cart');

                foreach ($products as $product) {
                    CartItem::create(
                        [
                            'cart_id' => $cart->id,
                            'product_id' =>  $product['id'],
                            'count' =>  $product['count']
                        ]
                    );
                }
                Session::forget('cart');
            }
        }
    }
}
