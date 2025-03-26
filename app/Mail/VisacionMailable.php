<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Mail\Mailables\Content;
use Illuminate\Mail\Mailables\Envelope;
use Illuminate\Queue\SerializesModels;

class VisacionMailable extends Mailable
{
    use Queueable, SerializesModels;

    public $docente;
    public $curso;
    /**
     * Create a new message instance.
     */
    public function __construct($docente, $curso)
    {
        $this->docente = $docente;
        $this->curso = $curso;
    }

    /**
     * Get the message envelope.
     */
    public function envelope(): Envelope
    {
        return new Envelope(
            subject: 'Visacion',
        );
    }

    /**
     * Get the message content definition.
     */
    public function content(): Content
    {
        return new Content(
            view: 'admin.emails.visacion',
            with: [
                // Pasamos la variable a la vista
                'docente' => $this->docente,
                'curso' => $this->curso,
            ],
        );
    }

    /**
     * Get the attachments for the message.
     *
     * @return array<int, \Illuminate\Mail\Mailables\Attachment>
     */
    public function attachments(): array
    {
        return [];
    }
}
