<?php

use App\Http\Controllers\Dashboard\DashboardController;
use App\Http\Controllers\Frontend\FrontendController;
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

Route::get('/', [FrontendController::class, 'index'])->name('frontend.index');
Route::get('shop', [FrontendController::class, 'shop'])->name('frontend.shop');
Route::get('product', [FrontendController::class, 'product'])->name('frontend.product');
Route::get('cart', [FrontendController::class, 'cart'])->name('frontend.cart');
Route::get('checkout', [FrontendController::class, 'checkout'])->name('frontend.checkout');

Route::get('admin', [DashboardController::class, 'index'])->name('dashboard.index');
Route::get('admin/login', [DashboardController::class, 'login'])->name('dashboard.login')->middleware('guest');
Route::get('admin/forget-password', [DashboardController::class, 'forget_password'])->name('dashboard.forget_password')->middleware('guest');

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
