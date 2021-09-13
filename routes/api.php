<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;



Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

Route::get('/notes',[\App\Http\Controllers\NoteController::class ,'allNotes']);
Route::get('/note/{note}',[\App\Http\Controllers\NoteController::class ,'show']);

Route::get('/cards',[\App\Http\Controllers\CardController::class ,'allCards']);
Route::get('/card/{card}',[\App\Http\Controllers\CardController::class ,'show']);
