<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PeopleController;


Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});
Route::put('/Bończak/54468/edit-people/{id}', [PeopleController::class, 'edit']);
Route::get('/Bończak/54468/people', [PeopleController::class, 'index']);
Route::get('/Bończak/54468/people/{id}', [PeopleController::class, 'show']);
Route::post('/Bończak/54468/people', [PeopleController::class, 'create']);
Route::delete('/Bończak/54468/people/{id}', [PeopleController::class, 'delete']);