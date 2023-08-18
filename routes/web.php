<?php

use App\Http\Controllers\Dashboard\AuthController;
use App\Http\Controllers\Dashboard\DashboardController;
use Illuminate\Support\Facades\Route;

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

Route::get('/', function () {
    return view('welcome');
});

Route::prefix("dashboard")->name("dashboard.")->group(function () {
    Route::middleware("guest_dashboard")->group(function () {
        // Auth Route
        Route::get("login", [AuthController::class, "login_index"])->name("login.index");
        Route::get("register", [AuthController::class, "register_index"])->name("register.index");
    });

    Route::middleware("auth_dashboard")->group(function () {
        // Main Dashboard Route
        Route::get("/", [DashboardController::class, "index"])->name("index");
    });
});
