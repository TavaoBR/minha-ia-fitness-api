<?php 

namespace App\Service;

use Gemini;

class GeminiService
{

    public function gerar($text)
    {
     
        $yourApiKey = $_ENV['GEMINI_API_KEY'] ?? 'default_api_key';
        
        $client = Gemini::client($yourApiKey);
        $resutl = $client->generativeModel(model: 'models/gemini-2.0-flash')->generateContent($text);

        return $resutl->text();
    }

}