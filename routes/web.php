<?php

use App\Http\Controllers\Backoffice\AdminController;
use App\Http\Controllers\Frontoffice\CartController;
use App\Http\Controllers\Frontoffice\HomeController;
use App\Http\Controllers\Frontoffice\ProductController as FOProductController;
use App\Http\Controllers\Backoffice\ProductController as BOProductController;
use App\Http\Controllers\Backoffice\CategoryController;
use App\Http\Controllers\Backoffice\OrderController;
use App\Http\Controllers\Backoffice\CustomerController;
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

Route::get('/', [HomeController::class, 'show']);

Route::get('backoffice/homepage', [AdminController::class, 'index']);

Route::get('eproducts/{order}', [FOProductController::class, 'showByOrder'])->name('sort');

Route::resource('cart', CartController::class);
Route::resource('eproducts', FOProductController::class);
Route::resource('backoffice/products', BOProductController::class);
Route::resource('backoffice/categories', CategoryController::class);
Route::resource('backoffice/orders', OrderController::class);
Route::resource('backoffice/customers', CustomerController::class);

Auth::routes();

Route::get('/home', [\App\Http\Controllers\Frontoffice\HomeController::class, 'index'])->name('home');
