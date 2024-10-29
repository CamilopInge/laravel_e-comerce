<?php 
namespace App\Services;

use Illuminate\Support\Facades\Http;

class ChatGPTService
{
    protected $apiKey;

    public function __construct()
    {
        $this->apiKey = env('OPENAI_API_KEY');
    }

    public function sendMessage($message)
    {
        $response = Http::withHeaders([
            'Authorization' => 'Bearer ' . $this->apiKey,
            'Content-Type' => 'application/json',
        ])->post('https://api.openai.com/v1/chat/completions', [
            'model' => 'gpt-3.5-turbo',
            'messages' => [
                ['role' => 'user', 'content' => $message],
            ],
            'max_tokens' => 150,
        ]);

        if ($response->successful()) {
            // Log para depuración
            \Log::info('Respuesta completa de la API: ', ['response' => $response->json()]);
            return $response->json();  // Devuelve la respuesta completa
        } else {
            // Registra cualquier error
            \Log::error('Error en ChatGPT: ', ['response' => $response->json()]);
            return ['error' => 'Error en la API: ' . $response->status()];
        }
    }
}
