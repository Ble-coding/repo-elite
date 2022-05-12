<?php

namespace App\Listeners;

use App\Mail\SocietyMarkdownMail;
use Illuminate\Support\Facades\Mail;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Contracts\Queue\ShouldQueue;

class SocietyHasRegisteredListener
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
        Mail::to($event->society->email)->send(new SocietyMarkdownMail($event->society));
        // Mail::to($society->email)->send(new SocietyMarkdownMail($society));
    }
}
