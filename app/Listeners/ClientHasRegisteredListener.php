<?php

namespace App\Listeners;

use App\Mail\ClientMarkdownMail;
use Illuminate\Support\Facades\Mail;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Contracts\Queue\ShouldQueue;

class ClientHasRegisteredListener implements shouldQueue
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
    //    sleep(5); //  php artisan queue:work apres avoir decommenté
        
        Mail::to($event->client->email)->send(new ClientMarkdownMail($event->client));
    }
}
