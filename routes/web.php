<?php

use Illuminate\Support\Facades\Route;
use app\Http\Controllers\ProductController; 
use App\Http\Controllers\AdminController;
use App\Http\Controllers\ClientController;
use App\Http\Controllers\CategoryController;


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