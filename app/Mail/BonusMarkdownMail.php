<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;
use App\Models\Bonus;
 
class BonusMarkdownMail extends Mailable
{
    use Queueable, SerializesModels;

    public $investi = [];
    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct(Bonus $investi)
    {
        $this->investi = $investi;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        return $this->markdown('emails.invest.markdown-bonus')->subject('Mon mail bonus');
    }
}
