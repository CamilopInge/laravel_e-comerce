<?php
namespace App\View\Components;

use Illuminate\View\Component;
use App\Models\Message;

class ChatComponent extends Component
{
    public $messages;

    public function __construct()
    {
        $this->messages = Message::all(); // Obtén todos los mensajes
    }

    public function render()
    {
        return view('components.chat-component');
    }
}
