<?php

namespace App\Mail;

use App\Models\Particulier;
use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;
use Illuminate\Contracts\Queue\ShouldQueue;

class ParticulierMarkdownMail extends Mailable
{
    use Queueable, SerializesModels;

    // // public $url = 'https://finance.elitesalliance.com';
    // public $particulier = [];
    
    public $particulier;


    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct(Particulier $particulier)
    {
        $this->particulier = $particulier;
        //
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        // return $this->from('levisble@elitesalliance.com')
        // ->subject('Mon mail perso')
        //  ->view('emails.particulier.depot')
        // ->attach(public_path('img/image.jpg'));
        // ->attachFromStorage('img/money.png');

        return $this->markdown('emails.particulier.markdown-particulier')
        ->subject('Mail enregistrement d\'un particulier');

        // return $this->markdown('emails.particulier.message-google');
        
    }
}
