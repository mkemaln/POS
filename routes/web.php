<?php

use App\Http\Controllers\CategoryController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\SalesController;
use App\Http\Controllers\UserController;
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

// home
Route::get('/', [HomeController::class, 'index']);

//category (prefix 'category' will append on each route)
Route::prefix('category')->group(function (){
    Route::get('/food-beverage', [CategoryController::class, 'fnb']);
    Route::get('/beauty-health', [CategoryController::class, 'bnh']);
    Route::get('/home-care', [CategoryController::class, 'hnc']);
    Route::get('/baby-kid', [CategoryController::class, 'bnk']);
});

// user
Route::get('/user/{id}/name/{name}', [UserController::class, 'index']);

// transaksi
Route::get('/sales', [SalesController::class, 'index']);
