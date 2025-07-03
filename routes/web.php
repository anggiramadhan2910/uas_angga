<?php

use App\Http\Controllers\CustomController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
Route::resource('customs', CustomController::class);
});
