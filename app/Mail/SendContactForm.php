<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Mail\Mailables\Content;
use Illuminate\Mail\Mailables\Envelope;
use Illuminate\Queue\SerializesModels;

class SendContactForm extends Mailable
{
    use Queueable, SerializesModels;

    /**
     * @var string
     * 
     * 
     */

     public string $textSubject;

     
     
    /**
     * @var string
     * 
     * 
     */

     public string $textMessage;
   
    /**
     * @var string
     * 
     * 
     */

     public string $textName;
        
    /**
     * @var string
     * 
     * 
     */

     public string $textEmail;

    public function __construct(string $subject, string $message, string $name, string $email)
    {
        
        $this->textSubject = $subject;
        $this->textMessage = $message;
        $this->textName = $name;
        $this->textEmail = $email;
    }

    /**
     * @return $this
     * Get the message envelope.
     */ 

     public function build(){

       return $this
       ->subject (subject:"Formulario de contacto- " .config(key:"app.name"))
       ->markdown(view:"email.contacto");

     }


    public function envelope(): Envelope
    {
        return new Envelope(
            subject: 'Send Contact Form',
        );
    }

    /**
     * Get the message content definition.
     */
    public function content(): Content
    {
        return new Content(
            view: 'view.name',
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
