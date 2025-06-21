<?php

use App\Http\Controllers\BookController;
use App\Http\Controllers\TestController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\latihanController;

Route::get('/user', function (Request $request) {
    return $request->user();
})->middleware('auth:sanctum');

Route::get('list-user',[latihanController::class, 'index',]);
Route::post('book', [BookController::class, 'store']);
Route::get('book', [BookController::class, 'index']);
Route::get('get-user', [BookController::class, 'getUser']);