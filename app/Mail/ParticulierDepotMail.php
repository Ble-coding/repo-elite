<?php

namespace App\Mail;

use App\Models\Particulier;
use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;
use Illuminate\Contracts\Queue\ShouldQueue;

class ParticulierDepotMail extends Mailable
{
    use Queueable, SerializesModels;

    // public $particulier = [];

    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct(Particulier $particulier)
    {
        // $this->particulier = $particulier;
    }

    /**
     * Build the message.
     *
     * @return $this
     */ 
    public function build()
    {
        return $this->from('levisble@elitesalliance.com')
        ->subject('Mon mail perso')
         ->view('emails.particulier.depot')
        // ->attach(public_path('img/image.jpg'));
        ->attachFromStorage('img/money.png');
        // ->view('emails.particulier.depot');
    }
}
