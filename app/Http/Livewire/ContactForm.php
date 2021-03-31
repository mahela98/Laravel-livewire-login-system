<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\Message;

class ContactForm extends Component
{
    public $name = '';
    public $email = '';
    public $message = '';

    public function saveMessage(){
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
