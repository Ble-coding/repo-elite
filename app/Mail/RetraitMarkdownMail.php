<?php

namespace App\Mail;

use App\Models\Retrait;
use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;
use Illuminate\Contracts\Queue\ShouldQueue;

class RetraitMarkdownMail extends Mailable
{
    use Queueable, SerializesModels;

    public $retrait = [];

    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct(Retrait $retrait)
    {
        $this->retrait = $retrait;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        return $this->markdown('emails.particulier.markdown-retrait') ->subject('Mon mail retrait');
    }
}
