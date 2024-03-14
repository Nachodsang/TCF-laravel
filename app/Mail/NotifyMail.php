<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Mail\Mailables\Content;
use Illuminate\Mail\Mailables\Envelope;
use Illuminate\Queue\SerializesModels;

class NotifyMail extends Mailable
{
    use Queueable, SerializesModels;

    /**
     * Create a new message instance.
     */
    public function build()
    {
        $send =  $this->subject('Test') //ติดต่อสอบถาม
            ->from('noreply@at-once.info', 'TCF Website Contact')
            ->to('nachodsang@gmail.com')

            ->cc('');
        if (@$this->data['cc'] != '') $send->bcc($this->data['cc']);

        return $this->view('multi-page.v2.mail')->with([
            'company' => @$this->data['company'],
            'telephone' => @$this->data['telephone'],
            'name' => @$this->data['name'],
            'email' => @$this->data['email'],
            'content' => @$this->data['content']
        ]);
    }
    public function __construct($data)
    {
        $this->data = $data;
    }

    /**
     * Get the message envelope.
     */
    public function envelope(): Envelope
    {
        return new Envelope(
            subject: 'TCF Website Inquiry',
        );
    }

    /**
     * Get the message content definition.
     */
    public function content(): Content
    {
        return new Content(
            view: 'multi-page.v2.mail',
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
