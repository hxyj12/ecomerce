<?php

use App\Http\Controllers\cartlistController;
use Illuminate\Support\Facades\Route;
use App\Models\products;
use App\http\Controllers\productsController;
use App\Http\Controllers\UserController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

//home
Route::get("/",[productsController::class,'home']);

Route::post("/addcart/{product}",[productsController::class,'addcart'])->middleware("auth");


//cart
Route::get("/cartlist",[cartlistController::class,'cartlist']);

Route::put("/checkout/{cartid}",[productsController::class,'checkout']);

Route::delete("/{id}/cartdelete",[productsController::class,'delete']);



//login 
// web.php
Route::get("/login",[UserController::class,'loginpage'])->name("login");

Route::get("/register",[UserController::class,'create']);

Route::post("/register",[UserController::class,'register']);

Route::post("/logout",[UserController::class,'destroy']);

Route::get("/verify", [UserController::class,'verifyForm'])->name('verifyForm');

Route::post("/verify", [UserController::class,'verify'])->name('verify');

Route::post("/loginverify", [UserController::class,'login'])->name('loginverify');







