<?php

namespace Database\Seeders;

use App\Models\Cart;
use App\Models\CartItem;
use App\Models\Category;
use App\Models\Product;
use App\Models\User;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        User::factory(100)->create();

        $users = User::all();

        $categories = ['دیجیتال', 'چوبی', 'خوراکی', 'لباس'];

        foreach ($categories as $category) {
            Category::factory()->create([
                'name' => $category
            ]);
        }

        $all_categories = Category::all();

        for ($i = 0; $i < 200; $i++) {
            $random_category = $all_categories->random();
            Product::factory()->create([
                'category_id' => $random_category->id,
            ]);
        }

        foreach ($users as $user) {
            Cart::factory()->create([
                'status' => 'فعال',
                'user_id' => $user->id
            ]);
        }
        $carts = Cart::all();
        $products = Product::all();
        for ($i = 0; $i < 500; $i++) {
            $random_cart = $carts->random();
            $random_product = $products->random();
            CartItem::factory()->create([
                'cart_id' => $random_cart->id,
                'product_id' => $random_product
            ]);
        }
        // User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);
    }
}
