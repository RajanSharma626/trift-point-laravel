<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\ColorController;
use App\Http\Controllers\CouponController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\SizeController;
use Illuminate\Support\Facades\Route;
use App\Http\Middleware\AdminAuth;

Route::get('/', function () {
    return view('welcome');
});

// ==== Admin Login Route ====>
Route::get('/admin', [AdminController::class, 'index']);
Route::post('/admin/auth', [AdminController::class, 'login'])->name('admin.auth');


// ===== All Admin Routes ====>
Route::middleware(['admin'])->group(function () {
    Route::get('admin/dashboard', [AdminController::class, 'dashboard']);

    // ==== admin Category Route ====>
    Route::get('admin/category', [CategoryController::class, 'index'])->name('admin.category');
    Route::get('admin/category/add', [CategoryController::class, 'addCategory'])->name('admin.category.add');
    Route::post('admin/category/submit', [CategoryController::class, 'manage'])->name('admin.category.manage');
    Route::get('admin/category/edit/{id}', [CategoryController::class, 'addCategory']);
    Route::get('admin/category/delete/{id}', [CategoryController::class, 'delete']);
    Route::get('admin/category/status/{type}/{id}', [CategoryController::class, 'status']);


    // ==== Admin Coupons Route ====>
    Route::get('admin/coupon', [CouponController::class, 'index'])->name('admin.coupon');
    Route::get('admin/coupon/add', [CouponController::class, 'addCoupon'])->name('admin.coupon.add');
    Route::post('admin/coupon/submit', [CouponController::class, 'manage'])->name('admin.coupon.manage');
    Route::get('admin/coupon/edit/{id}', [CouponController::class, 'addCoupon']);
    Route::get('admin/coupon/delete/{id}', [CouponController::class, 'delete']);
    Route::get('admin/coupon/status/{type}/{id}', [CouponController::class, 'status']);

    // ==== Admin Size Route ====>
    Route::get('admin/size', [SizeController::class, 'index'])->name('admin.size');
    Route::get('admin/size/add', [SizeController::class, 'addSize'])->name('admin.size.add');
    Route::post('admin/size/submit', [SizeController::class, 'manage'])->name('admin.size.manage');
    Route::get('admin/size/edit/{id}', [SizeController::class, 'addSize']);
    Route::get('admin/size/delete/{id}', [SizeController::class, 'delete']);
    Route::get('admin/size/status/{type}/{id}', [SizeController::class, 'status']);


    // ==== Admin Color Route ====>
    Route::get('admin/color', [ColorController::class, 'index'])->name('admin.color');
    Route::get('admin/color/add', [ColorController::class, 'addColor'])->name('admin.color.add');
    Route::post('admin/color/submit', [ColorController::class, 'manage'])->name('admin.color.manage');
    Route::get('admin/color/edit/{id}', [ColorController::class, 'addCOlor']);
    Route::get('admin/color/delete/{id}', [ColorController::class, 'delete']);
    Route::get('admin/color/status/{type}/{id}', [ColorController::class, 'status']);


    // ==== Admin Product Route ====>
    Route::get('admin/product', [ProductController::class, 'index'])->name('admin.product');
    Route::get('admin/product/add', [ProductController::class, 'addProduct'])->name('admin.product.add');
    Route::post('admin/product/submit', [ProductController::class, 'manage'])->name('admin.product.manage');
    Route::get('admin/product/edit/{id}', [ProductController::class, 'addproduct']);
    Route::get('admin/product/delete/{id}', [ProductController::class, 'delete']);
    Route::get('admin/product/status/{type}/{id}', [ProductController::class, 'status']);



    // ==== Admin Logout Route ====>
    Route::get('/admin/logout', function () {
        // Set session variables
        session()->forget('ADMIN_LOGIN');
        session()->forget('ADMIN_ID');

        // Redirect to dashboard
        return redirect('admin');
    })->name('admin.logout');
});