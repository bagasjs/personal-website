<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;

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

Route::view("/", "index");

Route::prefix("/auth")->controller(AuthController::class)->group(function(){
    Route::get("/login", "login")->name("login")->middleware("guest");
    Route::post("/login", "authenticate");
    Route::get("/register", "register")->name("register")->middleware("guest");
    Route::post("/register", "store");
    Route::get("/logout", "logout");
});