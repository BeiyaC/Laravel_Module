<?php

use App\Http\Controllers\Backoffice\AdminController;
use App\Http\Controllers\Frontoffice\CartController;
use App\Http\Controllers\Frontoffice\HomeController;
use App\Http\Controllers\Frontoffice\ProductController;
use App\Http\Controllers\Backoffice\BackProductController;
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

Route::get('products', [ProductController::class, 'index']);

Route::get('products/{order}', [ProductController::class, 'showByOrder'])->name('sortPage');

Route::get('product/{product}', [ProductController::class, 'showId']);

Route::get('cart', [CartController::class, 'show']);

Route::get('backoffice/homepage', [AdminController::class, 'index']);

Route::get('backoffice/products', [BackProductController::class, 'index']);

Route::get('backoffice/product/{product}', [BackProductController::class, 'show']);

Route::get('backoffice/product/{product}/edit', [BackProductController::class, 'edit']);

Route::put('backoffice/product/{product}', [BackProductController::class, 'update']);

Route::get('backoffice/create', [BackProductController::class, 'create']);

Route::post('backoffice/products', [BackProductController::class, 'store']);

Route::delete('backoffice/products/{product}', [BackProductController::class, 'destroy']);


Auth::routes();

Route::get('/home', [\App\Http\Controllers\Frontoffice\HomeController::class, 'index'])->name('home');
