<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\PostController;

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

Route::get("/", [HomeController::class, "index"])->name("home")->name("index");
Route::redirect("/home", "/");

Route::prefix("/auth")->controller(AuthController::class)->group(function(){
    Route::get("/login", "login")->name("login")->middleware("guest");
    Route::post("/login", "authenticate");
    Route::get("/register", "register")->name("register")->middleware("guest");
    Route::post("/register", "store");
    Route::view("/user-profile", "auth.user-profile")->middleware("auth");
    Route::get("/logout", "logout")->name("logout");
});

Route::prefix("/posts")->controller(PostController::class)->group(function(){
    Route::get("/", "index");
    Route::get("/create", "create")->middleware("auth");
    Route::post("/", "store")->middleware("auth");
    Route::get("/{post:slug}", "show");
    Route::get("/{post:slug}/edit", "edit")->middleware("auth")->middleware("is:post-owner,post");
    Route::put("/{post:slug}", "update")->middleware("auth")->middleware("is:post-owner,post");
    Route::get("/{post:slug}/delete", "destroy")->middleware("auth")->middleware("is:post-owner,post");
});