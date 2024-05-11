<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ArticleController;

Route::get('/', function() {
    return view('welcome');
});

Route::get('/articles', [ArticleController::class, 'index']);
Route::get('/articles/detail/{id}', [ArticleController::class, 'detail']);
Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
