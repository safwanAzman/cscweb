<?php

namespace App\Http\Livewire\Landing;

use Livewire\Component;
use Mail;
use App\Mail\ContactFormMail;


class ContactUs extends Component
{
    public $name;
    public $email;
    public $phone;
    public $comment;

    protected $rules = [
        'name' => 'required',
        'phone' => 'required',
        'email' => 'required|email',
        'comment' => 'required',
    ];

    public function contactFormSubmit()
    {
        $contact = $this->validate();
        $contact = [
            'name' => $this->name,
            'email' => $this->email,
            'phone' => $this->phone,
            'comment' => $this->comment,
        ];
        Mail::to('info@csc.net.my')->send(new ContactFormMail($contact));
        $this->dispatchBrowserEvent('swal',[
            'title' => 'Success!',
            'text'  => 'Thank you for reaching out to us!',
            'icon'  => 'success',
            'showConfirmButton' => false,
            'timer' => 1500,
        ]);

        $this->clearFields();
    }

    private function clearFields()
    {
        $this->name = '';
        $this->email = '';
        $this->phone = '';
        $this->comment = '';
    }


    public function render()
    {
        return view('livewire.landing.contact-us');
    }
}
