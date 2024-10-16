<?php

namespace App\Http\Controllers;

use App\Http\Requests\GeminiInputRequest;
use GeminiService;

class GeminiController extends Controller
{
    public function geminiResponse(GeminiInputRequest $request)
    {
        $content = $request->input('questionInput');
        
        $responseText = GeminiService::generateContentFromInput($content);
        return response()->json(['text' => $responseText]);
    }
}
