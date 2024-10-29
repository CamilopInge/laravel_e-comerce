<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Services\ChatGPTService;
use App\Models\Message;

class ChatController extends Controller
{
    protected $chatGPT;

    public function __construct(ChatGPTService $chatGPT)
    {
        $this->chatGPT = $chatGPT;
    }

    public function index()
    {
        // Obtener todos los mensajes de la base de datos
        $messages = Message::all();

        // Pasar los mensajes a la vista
        return view('chat.index', compact('messages'));
    }

    public function sendMessage(Request $request)
    {
        $request->validate([
            'message' => 'required|string',
        ]);
    
        $userMessage = $request->input('message');
    
        // Guarda el mensaje del usuario en la base de datos
        $message = Message::create(['content' => $userMessage]);
    
        // Obtén la respuesta de GPT
        $response = $this->chatGPT->sendMessage($userMessage);
    
        // Manejo de error
        if (isset($response['error'])) {
            return redirect()->back()->with('error', $response['error']);
        }
    
        // Verificar si 'choices' está presente y contiene el contenido
        if (isset($response['choices'][0]['message']['content'])) {
            // Guarda el mensaje de GPT en la base de datos
            Message::create(['content' => $response['choices'][0]['message']['content']]);
        } else {
            // Si no se recibe una respuesta válida, muestra un mensaje de error
            return redirect()->back()->with('error', 'No se recibió una respuesta válida de ChatGPT.');
        }
    
        return redirect()->back();
    }
}
