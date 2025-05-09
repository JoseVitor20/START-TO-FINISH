<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Mail\Mailables\Address;
use Illuminate\Mail\Mailables\Content;
use Illuminate\Mail\Mailables\Envelope;
use Illuminate\Queue\SerializesModels;

class ContatoMail extends Mailable
{
    use Queueable, SerializesModels;

    public $dados;

    /**
    * Create a new message instance.
    */
    public function __construct($dados)
    {
        $this->dados = $dados;
    }

    /**
    * Get the message envelope.
    */
    public function envelope(): Envelope
    {
        return new Envelope(
            from: new Address(env('MAIL_FROM_ADDRESS'), env('MAIL_FROM_NAME')),
            subject: 'Novo Contato'
        );
    }

    /**
    * Get the message content definition.
    */
    public function content(): Content
    {
        return new Content(
            view: 'emails.contato',
            with: ['dados' => $this->dados]
        );
    }

    /**
    * Get the attachments for the message.
    *
    * @return array
    */
    public function attachments(): array
    {
        return [];
    }
}