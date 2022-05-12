<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;
use Illuminate\Contracts\Queue\ShouldQueue;
use App\Models\Depot;

class DepotMarkdownMail extends Mailable
{
    use Queueable, SerializesModels;

    public $depot = [];
 
    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct(Depot $depot)
    {
        $this->depot = $depot;
        //
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        return $this->markdown('emails.particulier.markdown-depot')->subject('Mon mail depot');
    }
}
