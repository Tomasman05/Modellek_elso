<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
Use App\Http\Controllers\DrinkController;
Use App\Http\Controllers\TypeController;
Use App\Http\Controllers\PackageController;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "api" middleware group. Make something great!
|
*/

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

Route::get("/drinks",[DrinkController::class, "getDrinks"]);
Route::get("/oneDrink",[DrinkController::class, "getOneDrink"]);
Route::get("/byName/{value}",[DrinkController::class, "getByName"]);
Route::get("/update",[DrinkController::class, "updateDrink"]);
Route::delete("/delete",[DrinkController::class, "deleteDrink"]);