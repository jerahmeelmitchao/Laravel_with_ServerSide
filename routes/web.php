<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\CustomerController;
use App\Http\Controllers\OrderController;
use App\Http\Controllers\UserController;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

Route::get('/products', [ProductController::class, 'products'])->name('products.products');
Route::get('/products/{productCode}/viewID', [ProductController::class, 'listByID'])->name('products.viewID');

Route::get('/users', [UserController::class, 'list'])->name('users.userList');
// Route::get('/users/{code}', [UserController::class, 'listByid']);

// Route to view a user
Route::get('/users/{employeeNumber}/view', [UserController::class, 'viewID'])->name('users.view');



// Customer route
Route::get('/customers', [CustomerController::class, 'list_of_customer'])->name('customers.customerList');
Route::get('/customers/{customerNumber}/customerDetails', [CustomerController::class, 'view'])->name('customers.customerDetails');

// Orders Route
Route::get('/orders', [OrderController::class, 'getOrders'])->name('order.orderList');




require __DIR__ . '/auth.php';
