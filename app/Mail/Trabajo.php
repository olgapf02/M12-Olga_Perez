<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Attachment;
use Illuminate\Mail\Mailable;
use Illuminate\Mail\Mailables\Address;
use Illuminate\Mail\Mailables\Content;
use Illuminate\Mail\Mailables\Envelope;
use Illuminate\Queue\SerializesModels;

class Trabajo extends Mailable
{
    use Queueable, SerializesModels;

    protected $data;
    /**
     * Create a new message instance.
     */
    public function __construct($contenido)
    {
        $this->data = $contenido ;
    }

    /**
     * Get the message envelope.
     */
    public function envelope(): Envelope
    {
        return new Envelope(
            from: new Address('olgapf02@gmail.com', 'Olga Perez'),
            subject: 'Trabajar con Nosotros',
        );
    }

    /**
     * Get the message content definition.
     */
    public function content(): Content
    {
        return new Content(
            view: 'emails.trabajo_notificacion',
            with: [
                'datos' => $this->data
            ]
        );

    }

    /**
     * Get the attachments for the message.
     *
     * @return array<int, \Illuminate\Mail\Mailables\Attachment>
     */
    public function attachments(): array
    {
//        return [
//            Attachment::fromData(fn () => $this->data['file'], 'name.pdf')
//                ->withMime('application/pdf'),
//        ];
        return [
            Attachment::fromPath($this->data['file'])
                ->as('CV.pdf')
                ->withMime('application/pdf'),
        ];
    }
}
