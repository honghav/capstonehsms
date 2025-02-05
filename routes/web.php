<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\NoteController;
use App\Http\Controllers\LoginController;

// Route::get('/', function () {
//     return view('welcome');
// });
Route::get('/connect', function () {
    return view('connect');
});

Route::resource('/notes', NoteController::class);
Route::resource('/login', LoginController::class);
