<?php

use App\Http\Controllers\CartController;
use App\Http\Controllers\CheckoutController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\LandingpageController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\ShopController;

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

Route::get('/', [LandingpageController::class,'index']);

Route::middleware(['auth'])->group(function () {
	// Dashboard
	Route::get('/dashboard',[DashboardController::class, 'index']);

	// Controll Profile
	Route::get('/profile',[ProfileController::class,'index']);

	// Control Shop
	Route::get('/shop',[ShopController::class,'index']);
	Route::get('/show/{id}',[ShopController::class,'show']);
	Route::get('/shop/{id}',[ShopController::class,'category']);

	// Control Cart
	Route::get('/cart',[CartController::class,'index']);
	Route::post('cart/store',[CartController::class,'store']);
	Route::patch('cart/{id}',[CartController::class,'update']);
	route::post('/cart-delete/{id}',[CartController::class,'delete']);

	// Checkout manage
	Route::post('checkout',[CheckoutController::class,'store']);

});

Route::post('logout', function(){
	\Auth::logout();
	return redirect('login');
});
Route::get('logout', function(){
	return redirect('/dashboard');
});


Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
