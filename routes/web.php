<?php

use App\Http\Controllers\AuthController;
use Inertia\Inertia;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return Inertia::render("Home");
})->name("home");

Route::middleware("guest")->group(function(){
    Route::get("login",[AuthController::class,"login"])->name("login");
    Route::post("login",[AuthController::class,"loginProcess"])->name("Auth#loginProcess");
    Route::get("register",[AuthController::class,"register"])->name("Auth#register");
    Route::post("register",[AuthController::class,"registerProcess"])->name("Auth#registerProcess");
});

Route::middleware("auth")->group(function(){
    Route::post("logout",[AuthController::class,"logout"])->name("Auth#logout");
    Route::get("test",[AuthController::class,"test"])->name("Auth#test");
});

