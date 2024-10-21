<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LlmController;
use App\Http\Controllers\ThemeController;
use App\Http\Controllers\MenuController;
use App\Http\Controllers\WordController;

Route::get('/', function () {
    return view('menu');
})->name('menu');

Route::get('/question', function () {
    return view('question');
})->name('question');

Route::post('/submit', [LlmController::class, 'llmResponse'])->name('llm.submit');

Route::get('/', [MenuController::class, 'index'])->name('menu');

Route::post('/theme', [ThemeController::class, 'store'])->name('theme.store');
Route::delete('/theme/delete', [ThemeController::class, 'delete'])->name('theme.delete');

Route::post('/word', [WordController::class, 'store'])->name('word.store');
Route::delete('/word/{id}', [WordController::class, 'delete'])->name('word.delete');