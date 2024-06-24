<?php

use Illuminate\Support\Facades\Route;

Route::get('/',[App\Http\Controllers\ArticleController::class, 'index'])->name('articles.index');
Route::get('/{id}/category',[App\Http\Controllers\ArticleController::class, 'byCategory'])->name('articles.byCategory');
Route::get('/{id}/detail',[App\Http\Controllers\ArticleController::class, 'detail'])->name('articles.detail');
Route::get('/writer',[App\Http\Controllers\ArticleController::class, 'writer'])->name('articles.writer');
Route::get('/{id}/writerArticle',[App\Http\Controllers\ArticleController::class, 'writerArticle'])->name('articles.writerArticle');
Route::get('/aboutus',[App\Http\Controllers\ArticleController::class, 'aboutus'])->name('articles.aboutus');
Route::get('/popular',[App\Http\Controllers\ArticleController::class, 'popular'])->name('articles.popular');
