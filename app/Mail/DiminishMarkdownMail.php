<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;
use App\Models\Diminish;

class DiminishMarkdownMail extends Mailable
{
    use Queueable, SerializesModels;

    public $diminish = [];
    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct(Diminish $diminish)
    {
        $this->diminish = $diminish;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        return $this->markdown('emails.invest.markdown-diminish')->subject('Mon mail retrait invest');
    }
}
