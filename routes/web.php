<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Controller;

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

Route::get('/home', [Controller::class,'home']);
Route::prefix('category')->group(function () {

    Route::get('/food-beverage', [Controller::class, 'food']);
    Route::get('/beauty-health', [Controller::class, 'beauty']);
    Route::get('/home-care', [Controller::class, 'homecare']);
    Route::get('/baby-kid', [Controller::class, 'baby']);
});

Route::get('/user/{id}/name/{name}',[Controller::class,'user']);
Route::get('/transaction', [Controller::class,'transaction']);