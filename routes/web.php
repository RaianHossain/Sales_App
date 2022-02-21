<?php

use App\Http\Controllers\OrderController;
use App\Http\Controllers\PricelistController;
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
    return view('components.layouts.landing');
})->name("landing");

Route::get('/orders', [OrderController::class, 'index'])->name("orders.index");
Route::get('/orders/create', [OrderController::class, 'create'])->name("orders.create");


// Products Route below

Route::get('/products', [ProductController::class, 'index'])->name("products.index");
Route::get('/products/create', [ProductController::class, 'create'])->name("products.create");

// pricelist Route below

Route::get('/products/pricelist', [PricelistController::class, 'index'])->name("pricelist.index");
Route::get('/products/pricelist/create', [PricelistController::class, 'create'])->name("pricelist.create");







