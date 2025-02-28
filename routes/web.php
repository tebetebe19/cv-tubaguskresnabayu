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
    Route::get('/', [HomeController::class, 'new']);
    Route::get('/cv', [HomeController::class, 'cv']);
    Route::get('/for-sale/{slug}', [HomeController::class, 'prototype']);
    Route::get('/v1', [HomeController::class, 'v1']);
    Route::get('/test', [HomeController::class, 'test']);
});

Route::group(['prefix'=>'/data'], function(){
    Route::get('/client', [HomeController::class, 'client']);
    Route::get('/categories',[HomeController::class, 'categories']);
    Route::get('/expProjects', [HomeController::class, 'expProjects']);
    Route::get('/benefits', [HomeController::class, 'benefits']);
    Route::get('/saleProjects', [HomeController::class, 'saleProjects']);
    Route::get('/team', [HomeController::class, 'team']);
});