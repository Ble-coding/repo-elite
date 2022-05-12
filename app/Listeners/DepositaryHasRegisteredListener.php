<?php

namespace App\Listeners;

use App\Mail\DepositaryMarkdownMail;
use Illuminate\Support\Facades\Mail;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Contracts\Queue\ShouldQueue;

class DepositaryHasRegisteredListener
{
    /**
     * Create the event listener.
     *
     * @return void
     */
    public function __construct()
    {
        //
    }

    /**
     * Handle the event.
     *
     * @param  object  $event
     * @return void
     */
    public function handle($event)
    {
        //
        Mail::to($solde->client->email)->send(new DepositaryMarkdownMail($depositary));
        // Mail::to($event->client->email)->send(new ClientMarkdownMail($event->client));
        
    }
}
