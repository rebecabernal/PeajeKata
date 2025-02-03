<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\TollController;
use App\Http\Controllers\VehicleController;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/tolls', [TollController::class, "index"])->name("tolls");
Route::get('/vehicles', [VehicleController::class, "index"])->name("vehicles");