<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Mail\Mailables\Content;
use Illuminate\Mail\Mailables\Envelope;
use Illuminate\Queue\SerializesModels;

class CorreoContacto extends Mailable
{
    use Queueable, SerializesModels;

    public $datosCorreo;


    public function __construct($datosCorreo)
    {
        $this->datosCorreo = $datosCorreo;
        
    }
    

    public function envelope(): Envelope
    {
        return new Envelope(
            subject: 'Portafolio Web - Nuevo Mensaje de Contacto',
        );
    }

    public function content(): Content
    {
        return new Content(
            view: 'mails.correoContacto',
            with: [
                'datosCorreo' => $this->datosCorreo
            ]
        );
    }

    public function attachments(): array
    {
        return [];
    }
}

