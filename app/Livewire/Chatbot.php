<?php

namespace App\Livewire;

use Livewire\Component;

class Chatbot extends Component
{
    public $messages = [];
    public $input = '';

    public function sendMessage()
    {
        if (!trim($this->input)) return;

        // Add user message
        $this->messages[] = ['sender' => 'user', 'text' => $this->input];

        // Simulate bot response
        $botResponse = "I'm still learning!";
        $this->messages[] = ['sender' => 'bot', 'text' => $botResponse];

        $this->input = ''; // Clear input field
    }

    public function render()
    {
        return view('livewire.chatbot');
    }
}
