<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\Message;

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
        $this->name = '';
        $this->email = '';
        $this->message = '';
    }
 
    public function render()
    {
        return view('livewire.contact-form');
    }
}
