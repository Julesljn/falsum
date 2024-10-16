<?php

namespace App\Http\Controllers;

use App\Http\Requests\GeminiInputRequest;
use Gemini\Laravel\Facades\Gemini;
use App\Services\GeminiService;
use Illuminate\Http\Request;

class GeminiController extends Controller
{
    protected $geminiService;
    public function __construct(GeminiService $geminiService)
    {
        $this->geminiService = $geminiService;
    }

    public function geminiResponse(GeminiInputRequest $validated)
    {
        $message = config('llm');
        $content = $validated['questionInput'] . $message;
        
        $responseText = $this->geminiService->generateContentFromInput($content);
        return response()->json(['text' => $responseText]);
    }
}
// llm
// Validatore