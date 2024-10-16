<?php

namespace App\Http\Controllers;

use App\Http\Requests\GeminiInputRequest;
use Illuminate\Http\Request;
use GeminiService;

class GeminiController extends Controller
{
    public function geminiResponse(GeminiInputRequest $validated)
    {
        $content = $validated['questionInput'];

        $responseText = GeminiService::generateContentFromInput($content);
        return response()->json(['text' => $responseText]);
    }
}
