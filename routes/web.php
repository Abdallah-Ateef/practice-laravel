<?php

use App\Http\Controllers\PostController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/post/create',[PostController::class,'create']);
Route::get('/posts',[PostController::class,'index'])->name('posts');
Route::post('/post/insert',[PostController::class,'insert'])->name('post.insert');
Route::get('post/edit/{id}',[PostController::class,'edit'])->name('post.edit');
Route::post('/post/update/{id}',[PostController::class,'update'])->name('post.update');
Route::get('post/delete/{id}',[PostController::class,'delete'])->name('post.delete');
Route::get('/posts/delete/all',[PostController::class,'deleteAll'])->name('post.delete.all');
