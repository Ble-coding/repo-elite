<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;
use App\Models\Depositary;

class DepositaryMarkdownMail extends Mailable
{
    use Queueable, SerializesModels;

    public $depositary = [];

    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct(Depositary $depositary)
    {
        $this->depositary = $depositary;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        return $this->markdown('emails.client.markdown-depot')->subject('Mon mail depot');
    }
}
