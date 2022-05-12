<?php

namespace App\Mail;

use App\Models\Widraw;
use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;
use Illuminate\Contracts\Queue\ShouldQueue;

class WidrawMarkdownMail extends Mailable
{
    use Queueable, SerializesModels;

    public $widraw = [];


    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct(Widraw $widraw)
    {
        $this->widraw = $widraw;
    }


    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        return $this->markdown('emails.society.markdown-retrait')->subject('Mon mail retrait');
    }
}
