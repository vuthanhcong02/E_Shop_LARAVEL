<?php

use App\Http\Controllers\Admin\HomeController as AdminHomeController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Frontend\ShopController;
use App\Http\Controllers\Frontend\HomeController;
use App\Http\Controllers\Frontend\CartController;
use App\Http\Controllers\Frontend\CheckoutController;
use App\Http\Controllers\Frontend\BlogController;
use App\Http\Controllers\Frontend\ContactController;
use App\Http\Controllers\Frontend\AccountController;
use App\Http\Controllers\Admin\UserController;
use App\Http\Controllers\Admin\CategoryController;
use App\Http\Controllers\Admin\BrandController;
use App\Http\Controllers\Admin\ProductController;
use App\Http\Controllers\Admin\ProductImageController;

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
    Route::get('/category/{categoryName}', [ShopController::class, 'getProductByCategory']);
    Route::get('/tag/{tagName}', [ShopController::class, 'getProductByTag']);
});
Route::prefix('cart')->group(function(){
    Route::get('add', [CartController::class, 'add']);
    Route::get('/', [CartController::class, 'index']);
    Route::get('delete', [CartController::class, 'delete']);
    Route::get('destroy', [CartController::class, 'destroy']);
    Route::get('update',[CartController::class,'update']);
});
Route::prefix('checkout')->middleware('CheckMemberLogin')->group(function(){
    Route::get('/', [CheckoutController::class, 'index']);
    Route::post('/', [CheckoutController::class, 'addOrder']);
    Route::get('/result', [CheckoutController::class, 'show']);
    Route::get('/vnPayCheck', [CheckoutController::class, 'vnPayCheck']);
});
Route::prefix('blog')->group(function(){
    Route::get('/', [BlogController::class, 'index']);
    Route::get('/details/{id}', [BlogController::class, 'show']);
    Route::post('/details/{id}', [BlogController::class, 'postComment']);
    Route::get('/{categoryName}', [BlogController::class, 'getBlogByCategory']);
});
Route::prefix('contact')->group(function(){
    Route::get('/', [ContactController::class, 'index']);
    Route::post('/', [ContactController::class, 'postFeedback']);
});
Route::prefix('account')->group(function(){
    Route::get('/login', [AccountController::class, 'login']);
    Route::get('/logout', [AccountController::class, 'logout']);
    Route::post('/login', [AccountController::class, 'checkLogin']);
    Route::get('/register', [AccountController::class, 'register']);
    Route::post('/register', [AccountController::class, 'postRegister']);
    Route::prefix('/my-order')->middleware('CheckMemberLogin')->group(function(){
        Route::get('/', [AccountController::class, 'myOrder']);
        Route::get('/{id}', [AccountController::class, 'showDetailsOrder']);
    });
});

// Admin Dashboard
Route::prefix('admin')->middleware('CheckAdminLogin')->group(function(){
    Route::prefix('/user')->group(function(){
        Route::get('/',[UserController::class,'index']);
        Route::get('/add',[UserController::class,'create']);
        Route::post('/add',[UserController::class,'store']);
        Route::get('/{id}',[UserController::class,'show']);
        Route::get('/{id}/edit',[UserController::class,'edit']);
        Route::put('/{id}',[UserController::class,'update']);
        Route::delete('/{id}',[UserController::class,'destroy']);
    });
    Route::resource('/category', CategoryController::class);
    Route::resource('/brand', BrandController::class);
    Route::resource('/product', ProductController::class);
    Route::resource('/product/{product_id}/image', ProductImageController::class);
    Route::prefix('/login')->group(function(){
        Route::get('/',[AdminHomeController::class,'getLogin'])->withoutMiddleware('CheckAdminLogin');
        Route::post('/',[AdminHomeController::class,'checkLogin'])->withoutMiddleware('CheckAdminLogin');
    });
    Route::get('/logout',[AdminHomeController::class,'logout']);
});