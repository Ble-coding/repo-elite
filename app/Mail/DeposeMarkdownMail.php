<?php

namespace App\Mail;

use App\Models\Depose;
use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;
use Illuminate\Contracts\Queue\ShouldQueue;

class DeposeMarkdownMail extends Mailable
{
    use Queueable, SerializesModels;

    public $depose = [];

    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct(Depose $depose)
    {
        $this->depose = $depose;
    }


    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        return $this->markdown('emails.society.markdown-depot')->subject('Mon mail depot');
    }
}
