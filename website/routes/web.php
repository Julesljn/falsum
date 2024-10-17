<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LlmController;
use App\Http\Controllers\ThemeController;

Route::get('/', function () {
    return view('menu');
})->name('menu');

Route::get('/question', function () {
    return view('question');
})->name('question');

Route::post('/submit', [LlmController::class, 'geminiResponse'])->name('llm.submit');

Route::get('/', [ThemeController::class, 'index'])->name('menu');

Route::post('/themes', [ThemeController::class, 'store'])->name('themes.store');
Route::delete('/themes/delete', [ThemeController::class, 'delete'])->name('theme.delete');
