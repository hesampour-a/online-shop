<?php

use App\Http\Controllers\Api\apiAuthController;
use App\Http\Controllers\api\apiProductController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

Route::get('/user', function (Request $request) {
    return $request->user();
})->middleware('auth:sanctum');

Route::apiResource('product', apiProductController::class);

Route::post('/login', [apiAuthController::class, 'login']);
Route::post('/logout', [apiAuthController::class, 'logout'])->middleware('auth:sanctum');
