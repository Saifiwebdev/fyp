<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\SizeController;
use App\Http\Controllers\CouponController;
use App\Http\Controllers\ProductController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('index');
});
Route::get('/admin',[AdminController::class,'index']);
Route::post('/admin/auth',[AdminController::class,'auth'])->name('admin.auth');

Route::group(['middleware'=>'admin_auth'], function(){
    Route::get('/admin/dashboard',[AdminController::class,'dashboard']);
    //Category Routes
    Route::get('/admin/category',[CategoryController::class,'index']);
    Route::get('/admin/category/manage_category',[CategoryController::class,'manage_category']);
    Route::get('/admin/category/manage_category/{id}',[CategoryController::class,'edit']);
    Route::post('/admin/category/manage_category/update/{id}',[CategoryController::class,'update']);
    Route::post('/admin/category/manage_category_process',[CategoryController::class,'manage_category_process'])->name('category.insert');
    Route::get('/admin/category/delete/{id}',[CategoryController::class,'delete']);
    Route::get('/admin/category/status/{status}/{id}',[CategoryController::class,'status']);

    //Coupon Routes
    Route::get('/admin/coupon',[CouponController::class,'index']);
    Route::get('/admin/coupon/manage_coupon',[CouponController::class,'manage_coupon']);
    Route::get('/admin/coupon/manage_coupon/{id}',[CouponController::class,'edit']);
    Route::post('/admin/coupon/manage_coupon/update/{id}',[CouponController::class,'update']);
    Route::post('/admin/coupon/manage_coupon_process',[CouponController::class,'manage_coupon_process'])->name('coupon.insert');
    Route::get('/admin/coupon/delete/{id}',[CouponController::class,'delete']);
    Route::get('/admin/coupon/status/{status}/{id}',[CouponController::class,'status']);

    //Size Routes
    Route::get('/admin/size',[SizeController::class,'index']);
    Route::get('/admin/size/manage_size',[SizeController::class,'manage_size']);
    Route::get('/admin/size/manage_size/{id}',[SizeController::class,'edit']);
    Route::post('/admin/size/manage_size/update/{id}',[SizeController::class,'update']);
    Route::post('/admin/size/manage_size_process',[SizeController::class,'manage_size_process'])->name('size.insert');
    Route::get('/admin/size/delete/{id}',[SizeController::class,'delete']);
    Route::get('/admin/size/status/{status}/{id}',[SizeController::class,'status']);

    //Product Routes
    Route::get('/admin/product',[ProductController::class,'index']);
    Route::get('/admin/product/manage_product',[ProductController::class,'manage_product']);
    Route::get('/admin/product/manage_product/{id}',[ProductController::class,'edit']);
    Route::post('/admin/product/manage_product/update/{id}',[ProductController::class,'update']);
    Route::post('/admin/product/manage_product_process',[ProductController::class,'manage_product_process'])->name('product.insert');
    Route::get('/admin/product/delete/{id}',[ProductController::class,'delete']);
    Route::get('/admin/product/status/{status}/{id}',[ProductController::class,'status']);

});

Route::get('/logout',[AdminController::class,'logout']);
