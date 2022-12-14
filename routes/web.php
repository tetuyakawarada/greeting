<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/comments/random/', [App\Http\Controllers\RandomController::class, 'random']);

Route::get('/comments/{str1}', [App\Http\Controllers\GreetingController::class, 'greeting']);

Route::get('/comments/freeword/{free}', [App\Http\Controllers\FreeController::class, 'free']);
