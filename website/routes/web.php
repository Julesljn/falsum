<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\GeminiController;
Route::get('/', function () {
    return view('welcome');
});

Route::post('/submit', [GeminiController::class, 'geminiResponse'])->name('gemini.submit');