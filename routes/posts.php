<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PostController;

//Route::middleware('posts')->namespace('App\\Http\\Controllers')->group(base_path('routes'));
Route::resource('posts', PostController::class);
