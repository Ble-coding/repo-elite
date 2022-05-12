<?php

namespace App\Listeners;

use App\Events\InvestCreatedEvent;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Queue\InteractsWithQueue;

class InvestCreatedListener
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
     * @param  \App\Events\InvestCreatedEvent  $event
     * @return void
     */
    public function handle(InvestCreatedEvent $event)
    {
        //
    }
}
