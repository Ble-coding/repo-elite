<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;
use App\Models\Withadral;

class WithadralMarkdownMail extends Mailable
{
    use Queueable, SerializesModels;

    public $withadral = [];


    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct(Withadral $withadral)
    {
        $this->withadral = $withadral;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        return $this->markdown('emails.entreprise.markdown-retrait')->subject('
        Mail enregistrement d\'un retrait
        ');
    }
}
