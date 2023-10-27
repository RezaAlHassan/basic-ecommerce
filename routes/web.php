<?php

use App\Http\Controllers\ProfileController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\CheckoutController;
use App\Http\Controllers\OrderController;
use Illuminate\Support\Facades\Route;
use App\Imports\ProductsImport;

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

Route::get('/', function () {
    return view('welcome');
});

Route::get('/shop', [HomeController::class, 'index'])->name('shop');

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');

    Route::resource('product', ProductController::class);

    Route::post('review-store', [ProductController::class, 'reviewstore'])->name('reviews.store');

    Route::post('order-store', [CheckoutController::class, 'orderstore'])->name('order.store');

    Route::get('/product-description/{id}', [ProfileController::class, 'edit']);

    Route::get('/orders', [OrderController::class, 'index']);
});

Route::post('/products/import', [ProductController::class, 'import']);

Route::get('cart', [HomeController::class, 'cart'])->name('cart');
Route::get('add-to-cart/{id}', [HomeController::class, 'addToCart'])->name('add.to.cart');
Route::patch('update-cart', [HomeController::class, 'update'])->name('update.cart');
Route::delete('remove-from-cart', [HomeController::class, 'remove'])->name('remove.from.cart');

Route::get('product-description/{id}', [ProductController::class, 'productDetails'])->name('product.details');

require __DIR__ . '/auth.php';
