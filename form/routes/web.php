<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\listcontroller;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\AuthController;
//Login
Route::get("/",[AuthController::class,"show"]);
Route::post("login",[AuthController::class,"login"]);

//Register
Route::view("register","register");
Route::post("register",[AuthController::class,"register"]);

//home
Route::get("home",[AuthController::class,"home"])->middleware("auth");

//Logout
Route::post("logout",[AuthController::class,"logout"]);

//Display All
Route::get("display",[ProductController::class,"display"]);

//Add Product
Route::view("add","add_product");
Route::post("add",[ProductController::class,"addProduct"]);

//Delete Product
Route::view("delete","delete_product");
Route::post("delete",[ProductController::class,"deleteProduct"]);

//Update Product
Route::view("update","update_id");
Route::post("update",[ProductController::class,"updateProduct"]);
Route::post("updated",[ProductController::class,"saveUpdate"]);