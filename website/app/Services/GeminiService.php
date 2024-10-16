<?php

namespace App\Services;

use Gemini\Laravel\Facades\Gemini;


class GeminiService
{
    public function generateContentFromInput(string $input)
    {
        $result = Gemini::geminiPro()->generateContent($input);
        return $result->text();
    }
}