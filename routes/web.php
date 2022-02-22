<?php

use App\Http\Controllers\OrderController;
use App\Http\Controllers\OrderstoUpsellController;
use App\Http\Controllers\ProductsController;
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
    return view('components.layouts.landing');
})->name("landing");

Route::get('/orders', [OrderController::class, 'index'])->name("orders.index");

Route::get('/orders/create', [OrderController::class, 'create'])->name("orders.create");

// Route::get('products', [OrderController::class, 'index'])->name("reporting.index");


//orders to upsell right below

Route::get('/orders_to_upsell', [OrderstoUpsellController::class, 'index'])->name("orders_to_upsell.index");
Route::get('/orders_to_upsell/create', [OrderstoUpsellController::class, 'create'])->name("orders_to_upsell.create");
//products 
Route::get('/products', [ProductsController::class, 'index'])->name("products.index");
Route::get('/products/create', [ProductsController::class, 'create'])->name("products.create");
Route::get('/products/details', [ProductsController::class, 'product_details'])->name("products.product_details");
// Route::get('/login', [ProductsController::class, 'login'])->name("login.login");