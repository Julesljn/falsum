<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Gemini\Laravel\Facades\Gemini;

class GeminiController extends Controller
{
    public function geminiResponse(Request $request)
    {
        $validated = $request->validate([
            'questionInput' => 'required|string',
        ]);

        $content = $validated['questionInput'];

        $result = Gemini::geminiPro()->generateContent($content);
        $responseText = $result->text();
        
        return response()->json(['text' => $responseText]);
    }
}
