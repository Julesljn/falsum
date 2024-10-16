<?php

namespace App\Http\Controllers;

use App\Http\Requests\LlmInputRequest;
use LlmFacade;

class LlmController
{
    public function geminiResponse(LlmInputRequest $request)
    {
        $content = $request->input('questionInput');

        $responseText = LlmFacade::generateContentFromInput($content);
        return response()->json(['text' => $responseText]);
    }
}
