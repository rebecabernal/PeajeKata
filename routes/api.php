<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Api\TollController;
use App\Http\Controllers\Api\VehicleController;

Route::get('/user', function (Request $request) {
    return $request->user();
})->middleware('auth:sanctum');

Route::post("/tolls", [TollController::class, "store"])->name("apitollstore");
Route::post("/vehicles", [VehicleController::class, "store"])->name("apivehiclestore");
Route::put("/vehicles/{id}/tolls/{tollId}", [VehicleController::class, "passToll"])->name("apipasstoll");