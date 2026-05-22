<?php

use App\Http\Controllers\EsemenyController;
use App\Http\Controllers\KategoriaController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

Route::get('/user', function (Request $request) {
    return $request->user();
})->middleware('auth:sanctum');

//Kategoria
Route::get('/kategoria', [KategoriaController::class, 'index']);
Route::get('/kategoria/{id}', [KategoriaController::class, 'show']);
Route::put('/kategoria/{id}', [KategoriaController::class, 'update']);
Route::delete('/kategoria/{id}', [KategoriaController::class, 'destroy']);


//Esemeny
Route::get('/esemeny', [EsemenyController::class, 'index']);
Route::get('/esemeny/{id}', [EsemenyController::class, 'show']);
Route::put('/esemeny/{id}', [EsemenyController::class, 'update']);
Route::delete('/esemeny/{id}', [EsemenyController::class, 'destroy']);