<?php

namespace App\Mail;

use Config;
use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class Contact extends Mailable
{
    use Queueable, SerializesModels;

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
        $send =  $this->subject('Test') //ติดต่อสอบถาม
            ->from('noreply@at-once.info', env('APP_NAME', 'At Once'))
            ->to(env('MAIL_TO'))
            ->cc($this->data['email']);
        if (@$this->data['cc'] != '') $send->bcc($this->data['cc']);
        $send->markdown('multi-page.v2.mail')
            ->with([
                'company' => @$this->data['company'],
                'telephone' => @$this->data['telephone'],
                'name' => @$this->data['name'],
                'email' => @$this->data['email'],
                'content' => @$this->data['content']
            ]);
       
    }
}
