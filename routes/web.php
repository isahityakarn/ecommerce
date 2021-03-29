<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\front\FrontController;
use App\Http\Controllers\ProductController;
use Illuminate\Support\Facades\Route;





Route::get('/', [FrontController::class, 'index']);
Route::get('/index', [FrontController::class, 'index']);
Route::get('/product_details/{id}', [FrontController::class, 'product_details']);



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