<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Frontend\ShopController;
use App\Http\Controllers\Frontend\HomeController;
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
Route::get('/', [HomeController::class, 'index']);
Route::prefix('shop')->group(function(){
    Route::get('/product/{id}', [ShopController::class, 'show']);
    Route::post('/product/{id}', [ShopController::class, 'postComment']);
    Route::get('', [ShopController::class, 'index']);
});