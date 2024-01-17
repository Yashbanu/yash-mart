<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\listcontroller;
use App\Http\Controllers\ProductController;


//Home 
Route::view("home","home");

//Display All
Route::get("display",[ProductController::class,"Display"]);

//Add Product
Route::view("add","add_product");
Route::post("add",[ProductController::class,"AddProduct"]);

//Delete Product
Route::view("delete","delete_product");
Route::post("delete",[ProductController::class,"DeleteProduct"]);

//Update Product
Route::view("update","update_id");
Route::post("update",[ProductController::class,"UpdateProduct"]);
Route::post("updated",[ProductController::class,"SaveUpdate"]);