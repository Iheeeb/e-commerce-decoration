<?php

use Illuminate\Support\Facades\Route;
use app\Http\Controllers\Controller; 
use app\Http\Controllers\ProductController; 
use App\Http\Controllers\AdminController;
use App\Http\Controllers\ClientController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\OrderController;
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


Route::get('/', function () {
    return view('welcome');
});
Route::resource('products', 'App\Http\Controllers\ProductController');
Route::resource('categories', 'App\Http\Controllers\CategoryController');
Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

 //Admin and Client routes
Route::get('/admin', [AdminController::class, 'dashboard']);
Route::get('/client', [ClientController::class, 'dashboard']);
 //Category route
Route::get('/admin/category', [CategoryController::class, 'index']);
 //products route
Route::get('/test', function () {
    return view('admin.products.index');
});

Route::get('/admin/orders', [OrderController::class, 'index']);

