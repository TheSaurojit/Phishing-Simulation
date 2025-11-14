<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Mail\Mailables\Content;
use Illuminate\Mail\Mailables\Envelope;
use Illuminate\Queue\SerializesModels;

class SendEmail extends Mailable
{
    use Queueable, SerializesModels;

    /**
     * Create a new message instance.
     */
    public $id;


    public $email_temp;
    public $phish_temp;

    public $link;
    public function __construct($id,$phish_temp,$email_temp=null)
    {
        $this->id=$id;
     
  
        $this->email_temp=$email_temp;
        $this->phish_temp=$phish_temp;

        $url=env('APP_URL');

        $this->link="{$url}/templates/{$this->phish_temp}?id={$this->id}&email_temp={$this->email_temp}&template={$this->phish_temp}";
    }

    /**
     * Get the message envelope.
     */
    public function envelope(): Envelope
    {
        return new Envelope(
            subject: 'Send Email',
        );
    }

    /**
     * Get the message content definition.
     */
    public function content(): Content
    {
        return new Content(
            view: "email_template.{$this->email_temp}",
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


