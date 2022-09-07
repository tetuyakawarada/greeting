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
        }

        return view('message.greeting', ['str1' => $str1, 'str2' => $str2]);
    }
}
