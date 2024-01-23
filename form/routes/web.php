<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\listcontroller;
use App\Http\Controllers\ProductController;


//Home 
Route::view("home","home");

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