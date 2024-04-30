<?php

namespace Database\Seeders;

use App\Models\Cart;
use App\Models\CartItem;
use App\Models\Category;
use App\Models\Product;
use App\Models\ProductBrand;
use App\Models\ProductImage;
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

        $brands = ['samsung', 'ikco', 'saipa', 'honda', 'canon', 'xiaomi', 'apple'];

        foreach ($brands as $brand) {
            ProductBrand::factory()->create([
                'name' => $brand
            ]);
        }

        $all_brands = ProductBrand::all();

        for ($i = 0; $i < 200; $i++) {
            $random_category = $all_categories->random();
            $random_brand = $all_brands->random();
            Product::factory()->create([
                'category_id' => $random_category->id,
                'product_brand_id' => $random_brand->id,
                'fa_title' => "لورم ایپسوم متن فارسی ساختگی",
                'garanty' => 'متین',
                'description' => json_encode([
                    'درای تنوع رنگ',
                    'دارای بدنه فلزی در عین حال سبک',
                    'حافظه داخلی 32G',
                    'دارای دو سیم کارت',
                    'دارای شبکه 4G',
                    'اندازه نمایشگر 10 اینچ'
                ]),
                'colors' => json_encode([
                    'سفید' => 'white',
                    'مشکی' => 'black',
                    'نقره ای' => 'silver',
                    'طلایی' => 'gold',
                ]),
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
        $img_pathes = ['easyshop/img/p20lite-listimage-black.png', 'easyshop/img/Canon_EOS_400D.png', 'easyshop/img/off/watch/1.jpg'];

        foreach ($products as $product) {
            $img_path = $img_pathes[rand(0, 2)];
            ProductImage::factory()->create(['img_path' => $img_path, 'product_id' => $product->id]);
        }


        // User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);
    }
}
