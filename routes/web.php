<?php

use Illuminate\Support\Facades\Route;
use App\http\Controllers\BlogsController;


Route::get('/', function () {
    return view('welcome');
});

Route::get('/blogs', [BlogsController::class, 'index']);

Route::get('/blog/{id}', [BlogsController::class, 'displayBlog']);

