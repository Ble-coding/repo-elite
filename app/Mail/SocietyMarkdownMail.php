<?php

namespace App\Mail;

use App\Models\Society;
use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;
use Illuminate\Contracts\Queue\ShouldQueue;

class SocietyMarkdownMail extends Mailable
{
    use Queueable, SerializesModels;
    public $society = [];

    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct(Society $society)
    {
        $this->society = $society;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        return $this->markdown('emails.society.markdown-society')->subject('Mon mail entreprise');
    }
}
