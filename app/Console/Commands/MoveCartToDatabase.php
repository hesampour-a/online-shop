<?php

namespace App\Console\Commands;

use App\Models\User;
use Illuminate\Console\Command;
use Illuminate\Support\Facades\Session;

class MoveCartToDatabase extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'app:move-cart-to-database';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'moves cart items to database';

    /**
     * Execute the console command.
     */
    public function handle()
    {
        if (User::find(auth()->user()->id)->carts()->where('status', 'فعال')->exists()) {

            $cart = User::find(auth()->user()->id)->carts()->where('status', 'فعال')->latest()->get()[0];

            $products = Session::get('cart');
        }
    }
}
