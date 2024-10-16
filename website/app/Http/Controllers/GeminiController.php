<?php

namespace App\Http\Controllers;

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

    public function geminiResponse()
    {
        $validated = request()->validate([
            'questionInput' => 'required|string',
        ]);
        $content = $validated['questionInput'];

        $responseText = $this->geminiService->generateContentFromInput($content);
        $tt = 'salut';
        return response()->json(['text' => $responseText]);
    }
}
// llm
// Validatore