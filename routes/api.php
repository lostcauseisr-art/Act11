<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Api\TestController;

Route::get('/user', function (Request $request) {
    return $request->user();
})->middleware('auth:sanctum');

Route::get ('/test', [TestController::class, 'index']);
Route::get('/test/{id}', [TestController::class, 'getUniverse']); 
Route::post('/create-universe', [TestController::class, 'createUniverse']);