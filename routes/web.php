<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\pagecontroller;
use App\Http\Controllers\CartController;
use App\Http\Controllers\VariantController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', [pagecontroller::class, 'home'])->name('home');
Route::get('/about', [pagecontroller::class, 'about'])->name('about');
Route::get('/contact', [pagecontroller::class, 'contact'])->name('contact');
Route::get('/menu', [PageController::class, 'showMenu'])->name('menu');
Route::get('/news', [pagecontroller::class, 'news'])->name('news');
Route::get('/store', [pagecontroller::class, 'store'])->name('store');

// Route untuk halaman cart
Route::get('/cart', [CartController::class, 'index'])->name('cart.index');
Route::post('/cart/add/{menuId}', [CartController::class, 'addToCart'])->name('cart.add');
Route::put('/cart/update/{cartId}', [CartController::class, 'updateQuantity'])->name('cart.update');
Route::delete('/cart/delete/{cartId}', [CartController::class, 'delete'])->name('cart.delete');

Route::resource('/variants', VariantController::class);