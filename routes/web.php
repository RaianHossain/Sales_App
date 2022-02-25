<?php

use App\Http\Controllers\Auth\AuthenticatedSessionController;
use App\Http\Controllers\CustomerController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\OrderController;
use App\Http\Controllers\OrdertoInvoiceController;
use App\Http\Controllers\PricelistController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\RoleController;
use App\Http\Controllers\UserController;
use App\Models\User;
use App\Models\Role;
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
    return view('sales.landing');
});


//Role
Route::get('/users/users_details', [UserController::class, 'details'])->name('users.details');
Route::get('/users/location', function () {
    return view('sales.users.location');
})->name('users.location');
// Route::get('userrole', [UserController::class, 'roleindex'])->name('users.roleindex');

Route::resource('roles', RoleController::class);
Route::resource('users', UserController::class);



Route::get('/dashboard', function () {
    return view('sales.landing');
})->middleware(['auth'])->name('dashboard');

require __DIR__ . '/auth.php';

//logout
Route::post('/logout', [AuthenticatedSessionController::class, 'destroy'])
    ->middleware('auth')
    ->name('logout');


//exits route
Route::resource('orders', OrderController::class);


// Products Route below

Route::get('/products', [ProductController::class, 'index'])->name("products.index");
Route::get('/products/create', [ProductController::class, 'create'])->name("products.create");
Route::get('/products/product_details', [ProductController::class, 'product_details'])->name("products.details");
Route::post('/products', [ProductController::class, 'store'])->name("products.store");
Route::get('/products/{product}', [ProductController::class, 'show'])->name("products.show");

Route::get('/products/{product}/edit', [ProductController::class, 'edit'])->name('products.edit');
Route::post('/products/{product}', [ProductController::class, 'update'])->name("products.update");
Route::delete('/products/{product}', [ProductController::class, 'destroy'])->name("products.destroy");




// pricelist Route below


Route::get('/pricelists', [PricelistController::class, 'index'])->name("pricelists.index");
Route::get('/pricelists/create', [PricelistController::class, 'create'])->name("pricelists.create");
Route::post('/pricelists', [PricelistController::class, 'store'])->name("pricelists.store");

Route::get('/pricelists/{id}/edit', [PricelistController::class, 'edit'])->name("pricelists.edit");
Route::post('/pricelists/{id}', [PricelistController::class, 'update'])->name("pricelists.update");
Route::delete('/pricelists/{id}', [PricelistController::class, 'destroy'])->name("pricelists.destroy");


// order_to_invoice routes below

Route::get('/orders_to_invoice', [OrdertoInvoiceController::class, 'index'])->name("orders_to_invoice.index");
Route::get('/orders_to_invoice/create', [OrdertoInvoiceController::class, 'create'])->name("orders_to_invoice.create");


// customer routes below

// Route::get('/customers', [CustomerController::class, 'index'])->name("customers.index");
// Route::get('/customers/create', [CustomerController::class,'create'])->name("customers.create");
// Route::post('/customers', [CustomerController::class,'store'])->name("customers.store");

Route::resource('customers', CustomerController::class);
