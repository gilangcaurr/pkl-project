<?php

use App\Http\Controllers\FrontController;
use App\Http\Middleware\IsAdmin;
use Illuminate\Support\Facades\Route;

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

// Route Admin Atau Backend
// Route::group(['prefix'=>'admin', 'middleware'=>'auth'], function (){
//     Route::get('/', function (){
//         return view('admin.index');
//     });
// });

Route::group(['prefix' => 'admin', 'middleware' => ['auth', IsAdmin::class]], function () {
    Route::get('/', function () {
        return view('admin.index');
    });

    // Route Lainnya ....
    Route::resource('user', App\Http\Controllers\UserController::class);
    Route::resource('kategori', App\Http\Controllers\KategoriController::class);
    Route::resource('produk', App\Http\Controllers\ProdukController::class);
});

// Route Frontend(depan)
Route::get('/', [FrontController::class, 'index']);
Route::get('shop', [FrontController::class, 'shop']);
Route::get('produk/{id}', [FrontController::class, 'show']);
// Route::get('product',[FrontController::class, 'product']);
// Route::get('detailpro',[FrontController::class, 'detailpro']);
// Route::get('cart',[FrontController::class, 'cart']);
// Route::get('compaire',[FrontController::class, 'compaire']);
// Route::get('wishlist',[FrontController::class, 'wishlist']);
// Route::get('userd',[FrontController::class, 'userd']);

Route::middleware(['auth', 'user-access:user'])->group(function () {
    Route::get('home', [\App\Http\Controllers\HomeController::class, 'index'])->name('home');
    Route::post('/cart/add/{id}', [CartController::class, 'add'])->name('cart.add');
    // Menampilkan keranjang belanja
    Route::get('/carts', [CartController::class, 'index'])->name('carts.index');

    // Menambah produk ke keranjang belanja
    Route::post('/carts', [CartController::class, 'store'])->name('carts.store');

    // Menghapus produk dari keranjang belanja
    Route::delete('/carts/{id}', [CartController::class, 'destroy'])->name('carts.destroy');

    // Mengupdate kuantitas produk dalam keranjang belanja
    Route::put('/carts/{id}', [CartController::class, 'update'])->name('carts.update');
    Route::post('/cart/update-quantity', [CartController::class, 'updateQuantity'])->name('cart.updateQuantity');
    Route::post('/cart/remove-item', [CartController::class, 'removeItem'])->name('cart.removeItem');

    Route::get('checkout', [FrontController::class, 'checkout']);
});
