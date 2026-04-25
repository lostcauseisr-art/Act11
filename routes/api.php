<?php

use App\Http\Controllers\Api\CharacterController;
use App\Http\Controllers\Api\UniverseController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

Route::get('/user', function (Request $request) {
    return $request->user();
})->middleware('auth:sanctum');

Route::get('/test', [UniverseController::class, 'index']);
Route::get('/test/{id}', [UniverseController::class, 'show']);
Route::post('/create-universe', [UniverseController::class, 'store']);
Route::put('/update-universe/{id}', [UniverseController::class, 'update']);
Route::delete('/delete-universe/{id}', [UniverseController::class, 'destroy']);

Route::get('/character', [CharacterController::class, 'index']);
Route::get('/character/{id}', [CharacterController::class, 'show']);
Route::post('/create-character', [CharacterController::class, 'store']);
Route::put('/update-character/{id}', [CharacterController::class, 'update']);
Route::delete('/delete-character/{id}', [CharacterController::class, 'destroy']);
