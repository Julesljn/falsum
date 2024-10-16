<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LlmController;
Route::get('/', function () {
    return view('menu');
})->name('menu');

Route::get('/question', function () {
    return view('question');
})->name('question');

Route::post('/submit', [LlmController::class, 'geminiResponse'])->name('llm.submit');