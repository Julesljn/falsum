<?php

namespace App\Http\Controllers;

use App\Http\Requests\GeminiInputRequest;
use LlmFacade;

class LlmController extends Controller
{
    public function geminiResponse(GeminiInputRequest $request)
    {
        $content = $request->input('questionInput');

        $responseText = LlmFacade::generateContentFromInput($content);
        return response()->json(['text' => $responseText]);
    }
}
