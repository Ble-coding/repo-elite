<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;
use App\Models\Entreprise;

class EntrepriseMarkdownMail extends Mailable
{
    use Queueable, SerializesModels;

    public $entreprise = [];

    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct(Entreprise $entreprise)
    {
        $this->entreprise = $entreprise;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        return $this->markdown('emails.entreprise.markdown-entreprise')->subject('Mon mail entreprise');
    }
}
