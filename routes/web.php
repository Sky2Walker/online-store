<?php

use App\Http\Controllers\BlogController;
use App\Http\Controllers\IndexController;
use App\Http\Controllers\ShopController;
use Illuminate\Support\Facades\Route;


Route::get('/', [IndexController::class, 'index']);
Route::get('/shop', [ShopController::class, 'index']);
Route::get('/blog',[BlogController::class, 'index']);

