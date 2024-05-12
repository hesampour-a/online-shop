<?php

namespace App\Listeners;

use App\services\MoveCartToDatabase;
use Illuminate\Auth\Events\Login;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Queue\InteractsWithQueue;

class AddSessionCartToDatabaseCart
{
    /**
     * Create the event listener.
     */
    public function __construct()
    {
        //
    }

    /**
     * Handle the event.
     */
    public function handle(Login $event): void
    {
        dd($event->user);
        MoveCartToDatabase::SessionToDatabase($event->user);
    }
}
