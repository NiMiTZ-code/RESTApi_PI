<?php

declare(strict_types=1);


use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PeopleController;


Route::get('niemiec/305391/people', [PeopleController::class, 'index']);
Route::get('niemiec/305391/people/{people}', [PeopleController::class, 'show']);
Route::post('niemiec/305391/people/{people}', [PeopleController::class, 'create']);
Route::post('niemiec/305391/people/{people}', [PeopleController::class, 'update']);
Route::post('niemiec/305391/people/{people}', [PeopleController::class, 'destroy']);

