<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class RandomController extends Controller
{
    public function random()
    {
        $random_word = ['おはよう', 'こんにちは', 'こんばんは', 'おやすみ'];
        $random = $random_word[array_rand($random_word, 1)];
        return view('message.random', ['random' => $random]);
    }
}
