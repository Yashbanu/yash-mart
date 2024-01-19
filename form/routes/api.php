<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ApiController;
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

//Display Data 
Route::get('display/{id?}',[ApiController::class,"display"] );

//Insert Data
Route::post("add",[ApiController::class,"addProduct"] );

//Update Data
Route::put("update",[ApiController::class,"updateProduct"]);

//Search Data
Route::get("search/{id}",[ApiController::class,"searchProduct"]);

//Delete Data
Route::delete("delete/{id}",[ApiController::class,"deleteProduct"]);

