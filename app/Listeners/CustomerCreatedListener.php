<?php

namespace App\Listeners;

use App\Mail\CustomerMarkdownMail;
use App\Events\CustomerCreatedEvent;
use Illuminate\Support\Facades\Mail;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Contracts\Queue\ShouldQueue;

class CustomerCreatedListener implements shouldQueue
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
     * @param  \App\Events\CustomerCreatedEvent  $event
     * @return void
     */
    public function handle(CustomerCreatedEvent $event)
    {
        Mail::to($event->customer->email)->send(new CustomerMarkdownMail($event->customer));
    
    }
}
