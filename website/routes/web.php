<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\QuestionController;

Route::get('/', function () {
    return view('welcome');
});
// Route::post('/api/ask', [QuestionController::class, 'ask']);