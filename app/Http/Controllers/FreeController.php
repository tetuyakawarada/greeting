<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class FreeController extends Controller
{

    public function free($free)
    {
        return view('message.free', ['free' => $free]);
    }
}
