<?php

use App\Http\Controllers\Api\PostController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

Route::get('/user', function (Request $request) {
    return $request->user();
})->middleware('auth:sanctum');

// posts with sanctum/user authentication
// Route::apiResource('posts', PostController::class)->middleware('auth:sanctum');

// posts without sanctum/user authentication
Route::apiResource('posts', PostController::class);