<?php

namespace App\Services;

use Gemini\Laravel\Facades\Gemini;


class LlmService
{
    public function generateContentFromInput(string $input)
    {
        $result = Gemini::geminiPro()->generateContent($input);
        return $result->text();
    }
}