<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\Message;
use App\Mail\contactformMail;
use Illuminate\support\facades\Mail;

class ContactForm extends Component
{
    public $name = '';
    public $email = '';
    public $message = '';

    protected $rules = [
        // validating form
    'name' => 'required|min:6',
    'email' => 'required|email',
    'message' => 'required'

    ];
    protected $messages = [
        // custome error message
        'name.required' => 'your name is required A###',
    ];

public function updated($propatyName){
    // validate on the fly
    $this->validateOnly($propatyName);
}


    public function saveMessage(){

        $this->validate();

        Message::create([
            'name' => $this->name,
            'email' => $this->email,
            'message' => $this->message,
        ]);

        Mail::to('ouremail@test.com')-> send(new contactformMail($this->name,$this->email,$this->message));

        $this->name = '';
        $this->email = '';
        $this->message = '';
    }
 
    public function render()
    {
        return view('livewire.contact-form');
    }
}
