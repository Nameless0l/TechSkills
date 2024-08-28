<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

Route::middleware(['auth:sanctum'])->get('/user', function (Request $request) {
    return $request->user();
});
require __DIR__.'/auth.php';

Route::apiResource('owner',\App\Http\Controllers\OwnerController::class);
Route::apiResource('picture',\App\Http\Controllers\PictureController::class);
Route::apiResource('editor',\App\Http\Controllers\EditorController::class);
Route::apiResource('posts',\App\Http\Controllers\PostController::class);
Route::apiResource('slug',\App\Http\Controllers\SlugController::class);
Route::apiResource('topic',\App\Http\Controllers\TopicController::class);
Route::apiResource('sub-slug',\App\Http\Controllers\SubTopicController::class);
Route::apiResource('comment',\App\Http\Controllers\CommentController::class);
