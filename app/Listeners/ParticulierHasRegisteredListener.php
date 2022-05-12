<?php

namespace App\Listeners;

use App\Mail\ParticulierMarkdownMail;
use Illuminate\Support\Facades\Mail;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Contracts\Queue\ShouldQueue;

class ParticulierHasRegisteredListener implements shouldQueue
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
        
        Mail::to($event->particulier->email)->send(new ParticulierMarkdownMail($event->particulier));
    }
}
