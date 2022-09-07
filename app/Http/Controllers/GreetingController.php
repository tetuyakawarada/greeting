<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class GreetingController extends Controller
{
    public function greeting($greeting)
    {
        switch ($greeting) {
            case 'morning':
                $str1 = '朝のあいさつ';
                $str2 = 'おはようございます';
                break;
            case 'afternoon':
                $str1 = '昼のあいさつ';
                $str2 = 'こんにちは';
                break;
            case 'evening':
                $str1 = '夕方のあいさつ';
                $str2 = 'こんばんは';
                break;
            case 'night':
                $str1 = '夜のあいさつ';
                $str2 = 'おやすみ';
                break;
        }

        return view('message.greeting', ['str1' => $str1, 'str2' => $str2]);
    }
}
