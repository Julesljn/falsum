<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LlmController;
Route::get('/', function () {
    return view('welcome');
});

Route::post('/submit', [LlmController::class, 'geminiResponse'])->name('llm.submit');