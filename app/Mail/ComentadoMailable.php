<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Mail\Mailables\Content;
use Illuminate\Mail\Mailables\Envelope;
use Illuminate\Queue\SerializesModels;

class ComentadoMailable extends Mailable
{
    use Queueable, SerializesModels;

    public $comentario;
    public $docente;
    public $curso;
    /**
     * Create a new message instance.
     */
    public function __construct($comentario, $docente, $curso)
    {
        $this->comentario = $comentario;
        $this->docente = $docente;
        $this->curso = $curso;
    }

    /**
     * Get the message envelope.
     */
    public function envelope(): Envelope
    {
        return new Envelope(
            subject: 'Comentado',
        );
    }

    /**
     * Get the message content definition.
     */
    public function content(): Content
    {
        return new Content(
            view: 'admin.emails.comentado',
            with: [
                // Pasamos la variable a la vista
                'comentario' => $this->comentario,
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
