<?php

use App\Http\Controllers\Controller;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\ClientController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\OrderController;
use App\Http\Controllers\UserController;
use App\Models\Category;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Route;


// Route pour confirmer une commande
Route::put('orders/{id}/confirm', [OrderController::class, 'confirm'])->name('orders.confirm');

// Route pour supprimer une commande
Route::delete('orders/{id}', [OrderController::class, 'destroy'])->name('orders.destroy');



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

Route::get('/admin/clients', [Controller::class, 'index'])->name('clients.index');
Route::get('/category/{id}', [Controller::class, 'showCategorie'])->name('category.show');
Route::get('product/detail/{id}', [ProductController::class, 'product_details'])->name('product.detail');

Route::get('/', function () {
    $categories = Category::select('categories.*', DB::raw('(SELECT COUNT(*) FROM products WHERE products.category = categories.name) as products_count'))
        ->get();

    return view('guest.home', compact('categories'));
});
Route::resource('products', 'App\Http\Controllers\ProductController');
Route::resource('categories', 'App\Http\Controllers\CategoryController');
Route::resource('orders', 'App\Http\Controllers\OrderController');
Route::get('/cart', [OrderController::class, 'indexcart'])->name('cart');

Route::post('/cart/remove/{product}', [OrderController::class, 'removeFromCart'])->name('cart.remove');

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Auth::routes();
Route::get('cart/add/{product}', [ProductController::class, 'addToCart'])->name('products.addToCart');
 //Admin and Client routes
Route::get('/admin', [AdminController::class, 'index']);
Route::get('/profile', [AdminController::class, 'profile'])->name('admin.profile');
Route::post('/edit/profile', [AdminController::class, 'editprofile'])->name('admin.editprofile');
Route::get('/client', [ClientController::class, 'dashboard']);

 //Category route
Route::get('admin/category', [CategoryController::class, 'index']);
 //products route
Route::get('/test', function () {
    return view('admin.products.index');
});



Route::get('/admin/orders', [OrderController::class, 'index'])->name('admin.orders.index');


Route::get('/client/checkout', [ClientController::class, 'checkout'])->name('checkout');

Route::middleware('auth')->group(function () {
    Route::get('/place/order', [OrderController::class, 'placeOrder'])->name('order.place');
});