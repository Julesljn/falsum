<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Theme;
use App\Http\Requests\StoreTheme;
use App\Http\Requests\DeleteTheme;

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
    public function delete(DeleteTheme $request)
    {
        $themeId = $request->input('theme');

        if (empty($themeId)) {
            return redirect()->back();
        }
    
        $theme = Theme::find($themeId);
    
        if (!$theme) {
            return redirect()->back();
        }
    
        $theme->delete();
    
        return redirect()->back();
    }
}
