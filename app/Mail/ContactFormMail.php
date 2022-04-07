<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class ContactFormMail extends Mailable
{
    use Queueable, SerializesModels;
    public $contact;
    protected $name;
    protected $email;
    protected $phone;
    protected $comment;


    public function __construct($contact)
    {
        $this->name =   $contact['name'];
        $this->email =  $contact['email'];
        $this->phone =  $contact['phone'];
        $this->comment = $contact['comment'];

    }


    public function build()
    {
        return $this->view('mail.contact-form',[
            'name' => $this->name,
            'email' => $this->email,
            'phone' => $this->phone,
            'comment' => $this->comment,
        ]);
    }
}
