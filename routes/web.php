<?php

use App\Http\Controllers\Neumorph\HomeController;
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

Route::group(['prefix' => '/'], function () {
    Route::get('/', [HomeController::class, 'index']);
    Route::get('/cv', [HomeController::class, 'cv']);
    Route::get('/for-sale/{slug}', [HomeController::class, 'prototype']);

    Route::get('/new', [HomeController::class, 'new']);
});
