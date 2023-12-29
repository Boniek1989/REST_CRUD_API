<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PeopleController;

//code 200
Route::get('Bończak/54468/people', [PeopleController::class, 'index']);
//code 200
Route::get('Bończak/54468/people/{id}', [PeopleController::class, 'show']);
//code 200
Route::post('/create', [PeopleController::class, 'create']);



Route::delete('Bończak/54468/people/{id}', [PeopleController::class, 'destroy']);



//error 419
Route::post('Bończak/54468/people', [PeopleController::class, 'create']);



