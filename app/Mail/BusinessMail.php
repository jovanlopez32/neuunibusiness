<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Mail\Mailables\Content;
use Illuminate\Mail\Mailables\Envelope;
use Illuminate\Queue\SerializesModels;

class BusinessMail extends Mailable
{
    use Queueable, SerializesModels;

    public $business;

    /**
     * Create a new message instance.
     *
     * @return void
     */
    
     /* Aqui es donde recibe los datos que le enviamos en e controlador. 
    Para ello asignamos una variable publica para poder accesar mas facil a la informacion*/
    public function __construct( $lead_business)
    {
        //
        $this->business = $lead_business;
        
    }

    /**
     * Get the message envelope.
     *
     * @return \Illuminate\Mail\Mailables\Envelope
     */
    public function envelope()
    {
        /* Asunto del Correo Electronico */
        return new Envelope(
            subject: 'Contacto | Neuuni Business',
        );
    }

    /**
     * Get the message content definition.
     *
     * @return \Illuminate\Mail\Mailables\Content
     */
    public function content()
    {
        /* Returna un html sencillo como cuerpo del correo electronico */
        return new Content(
            view: 'mails/new-lead',
        );
    }

    /**
     * Get the attachments for the message.
     *
     * @return array
     */
    public function attachments()
    {
        return [];
    }
}
