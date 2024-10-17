<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Theme;
use App\Http\Requests\StoreTheme;

class ThemeController
{
    public function index()
    {
        $themes = Theme::all();
        return view('menu', compact('themes'));
    }
    public function store(StoreTheme $request)
    {
        $theme = Theme::create([
            'theme' => $request['theme']
        ]);
        return response()->json(['theme' => $theme], 200);
    }
}
