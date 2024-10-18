<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Word;
use App\Http\Requests\StoreWord;

class WordController
{
    public function store(StoreWord $request)
    {
        $word = Word::create([
            'word' => $request['word']
        ]);
        return response()->json(['word' => $word], 200);
    }
    public function delete($id)
    {
        $word = Word::findOrFail($id);
        $word->delete();

        return redirect()->back();
    }
}
