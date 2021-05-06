<?php

namespace App\Mail;

use App\Http\Enums\MailConfig;
use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class RegistrationMail extends Mailable
{
    use Queueable, SerializesModels;
    public $data;
    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct($data)
    {
        $this->data = $data;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        return $this->view('emails.registration')
            ->from(MailConfig::FROM, MailConfig::NAME)
            ->subject(MailConfig::SUBJECT)
            ->with([ 'qrcode' => $this->data['qrcode'] ]);
    }
}
