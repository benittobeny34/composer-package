<?php

namespace Benitto\Crud\Http\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class ContactMailable extends Mailable
{
    use Queueable, SerializesModels;

    public $body;
    public $email;

    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct($body,$email)
    {
        $this->body = $body;
        $this->email = $email;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        return $this->from(config('benitto.mail_from'))->markdown('benitto::markdown.contact');
    }
}
