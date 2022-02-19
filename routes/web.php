<?php

use App\Http\Controllers\OrderController;
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

Route::get('/products', [OrderController::class, 'index'])->name("products.index");


