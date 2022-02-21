<?php

use App\Http\Controllers\OrderController;
use App\Http\Controllers\OrdertoInvoiceController;
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
Route::get('/products/product_details', [ProductController::class, 'product_details'])->name("products.details");



// pricelist Route below

Route::get('/pricelist', [PricelistController::class, 'index'])->name("pricelist.index");
Route::get('/pricelist/create', [PricelistController::class, 'create'])->name("pricelist.create");

// order_to_invoice routes below

Route::get('/orders_to_invoice', [OrdertoInvoiceController::class, 'index'])->name("orders_to_invoice.index");
Route::get('/orders_to_invoice/create', [OrdertoInvoiceController::class, 'create'])->name("orders_to_invoice.create");










