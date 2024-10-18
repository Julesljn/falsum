<?php

namespace App\Http\Controllers;

use App\Models\Theme;
use App\Models\Word;

class MenuController
{
    public function index()
    {
        $themes = Theme::all();
        $words = Word::all();

        return view('menu', compact('themes', 'words'));
    }
}
