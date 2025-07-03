<?php

use App\Http\Controllers\CustomController;
use Illuminate\Support\Facades\Route;

Route::get('/', [CustomController::class, 'index']);
Route::resource('customs', CustomController::class);