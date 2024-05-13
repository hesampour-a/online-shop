<?php

namespace App\Listeners;

use App\Mail\welcomeEmail;
use App\services\MoveCartToDatabase;
use Illuminate\Auth\Events\Login;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Support\Facades\Mail;

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

        MoveCartToDatabase::SessionToDatabase($event->user);

        Mail::to($event->user,)->queue(new welcomeEmail($event->user));
    }
}
