<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\IndexController;
use App\Http\Controllers\ArticleController;

Route::get('/', [IndexController::class, 'index'])->name('home');

Route::prefix('articles')->group(function (){
    Route::get('/create', [ArticleController::class, 'create'])->name('articles.create');
    Route::get('/update/{id}', [ArticleController::class, 'update'])
        ->whereNumber('id')
        ->name('articles.update');
    Route::get('/delete/{id}', [ArticleController::class, 'delete'])
        ->whereNumber('id')
        ->name('articles.delete');
    Route::get('/{id}', [ArticleController::class, 'show'])
        ->whereNumber('id')
        ->name('articles.details');
});
Route::fallback(function(){
    return view('errors/not-found');
});