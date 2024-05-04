<?php

namespace App\Http\Controllers;

use App\Models\Cart;
use App\Http\Controllers\Controller;
use App\Models\Product;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class CartController extends Controller
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
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show()
    {

        if (auth()->user()) {

            // $cart = User::find(auth()->user()->id)->carts()->where('status', 'فعال')->latest()->get()[0];
            // $cart_items = $cart->cart_item()->get();

            // $products = [];
            // foreach ($cart_items as $cart_item) {
            //     $products[] = Product::where('id', $cart_item->product_id)->get()[0];
            // }


            $products = DB::table('users')
                ->join('carts', 'users.id', '=', 'carts.user_id')
                ->where('carts.user_id', '=', auth()->user()->id)
                ->where('carts.status', '=', 'فعال')
                ->join('cart_items', 'carts.id', '=', 'cart_items.cart_id')
                ->join('products', 'cart_items.product_id', '=', 'products.id')
                ->join('product_images', 'products.id', '=', 'product_images.product_id')
                ->select('products.*', 'cart_items.count', 'product_images.img_path')
                ->get();


            return view(
                'cart.show',
                [
                    'products' => $products

                ]
            );
        }
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Cart $cart)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Cart $cart)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Cart $cart)
    {
        //
    }
}
