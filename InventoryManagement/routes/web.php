<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\Product;
use App\Http\Controllers\Purchase;
use App\Http\Controllers\Sale;
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





Route::get('/',[HomeController::class,'index']);

Route::get('/product/productType',[Product::class,'productType']);
Route::get('/product/category',[Product::class,'category']);
Route::get('/product',[Product::class,'product']);
Route::get('/product/productSize',[Product::class,'productSize']);
Route::get('/product/productUnit',[Product::class,'productUnit']);
Route::get('/product/stock',[Product::class,'stock']);

Route::get('/purchase/order',[Purchase::class,'order']);
Route::get('/purchase/orderItem',[Purchase::class,'order_item']);

Route::get('/sale/order',[Sale::class,'order']);
Route::get('/sale/orderItem',[Sale::class,'order_item']);
