<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\front\FrontController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Route;


// front page
Route::get('/', [FrontController::class, 'index']);
Route::get('/index', [FrontController::class, 'index']);
Route::get('/product_details/{id}', [FrontController::class, 'product_details']);
Route::post('/addtocart', [FrontController::class, 'addtocart']);
Route::get('/shopcart', [FrontController::class, 'shopcart']);
Route::get('/addtocart_update/{id}', [FrontController::class, 'addtocart_update']);
Route::get('/addtocart_delete/{id}', [FrontController::class, 'addtocart_delete']);
Route::post('/addtocart_update_submit', [FrontController::class, 'addtocart_update_submit']);
Route::get('/checkout', [FrontController::class, 'checkout']);
Route::post('/order_info', [FrontController::class, 'order_info']);
Route::get('/shop', [FrontController::class, 'shop']);

// user
Route::get('/login', [UserController::class, 'index'])->name('userlogin');
Route::get('/register', [UserController::class, 'usercreate']);
Route::post('/userstore', [UserController::class, 'userstore']);
Route::post('/auth', [UserController::class, 'auth'])->name('user.auth');
Route::get('/logout', function () {
    session()->forget('USER_LOGIN');
    session()->forget('USER_ID');
    return redirect('/');
});
Route::get('/user/dashboard', [UserController::class, 'dashboard']);




// admin
Route::get('admin', [AdminController::class, 'index']);
Route::post('admin/auth', [AdminController::class, 'auth'])->name('admin.auth');

Route::group(['middleware' => 'admin_auth'], function () {
    Route::get('admin/dashboard', [AdminController::class, 'dashboard']);
    Route::get('admin/update', [AdminController::class, 'update']);
    Route::get('admin/category/show', [CategoryController::class, 'show']);

    Route::get('/admin/logout', function () {
        session()->forget('ADMIN_LOGIN');
        session()->forget('ADMIN_ID');
        return redirect('/admin');
    });

    Route::get('admin/product/show', [ProductController::class, 'show']);
});