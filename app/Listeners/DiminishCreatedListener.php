<?php

namespace App\Listeners;

use App\Events\DiminishCreatedEvent;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Queue\InteractsWithQueue;

class DiminishCreatedListener
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
     * @param  \App\Events\DiminishCreatedEvent  $event
     * @return void
     */
    public function handle(DiminishCreatedEvent $event)
    {
        //
    }
}
