<?php

use App\Http\Controllers\CartController;
use App\Http\Controllers\CheckoutController;
use App\Http\Controllers\CustomerController;
use App\Http\Controllers\ProductorderController;
use App\Http\Controllers\QuoteController;
use App\Http\Controllers\SeoController;
use App\Http\Controllers\SingleProductController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('pages.home1');
});


Route::view('/about','pages.about');
Route::view('/contact','pages.contact');
// Route::view('/singleprod','pages.singleprod');
Route::view('/product','pages.product');
Route::view('/quickcheckout','pages.quickcheckout');
Route::view('/register','pages.register');
Route::view('/login', 'pages.login');
Route::view('/thankyou','pages.thankyou');
Route::view('/myaccount','pages.myaccount');
Route::view('/orderdetails','pages.orderdetails');
Route::view('/privacy','pages.privacy');
Route::view('/shipping','pages.shipping');
Route::view('/terms','pages.terms');
Route::view('/seodetails','pages.seodetails');
Route::view('/blog','pages.blog');
Route::view('/blogdetails','pages.blogdetails');



// create users
Route::post('/usercreate',[CustomerController::class,'usercreate']);
Route::post('/userupdate',[CustomerController::class,'userupdate']);
Route::post('/userlogin',[CustomerController::class,'userlogin']);
Route::get('/logout', [CustomerController::class, 'logout'])->name('customer.logout');
Route::post('/update-qty', [CartController::class, 'updateQty']);
Route::get('/cart/remove/{id}', [CartController::class, 'removeItem'])->name('cart.remove');
Route::view('/checkout','pages.checkout');
Route::get('stateCity/{state_id}',[CartController::class,'getStateCities']);
Route::get('cityarea/{city_id}',[CartController::class,'getCitiesarea']);
Route::get('/singleprod/{slug}', [SingleProductController::class, 'singleprod']);
Route::post('/update-cart', [CartController::class, 'updateCart']);
Route::post('/placeorder', [CheckoutController::class, 'placeOrder'])->name('placeorder');
Route::get('/orderdetails/{orderid}',[ProductorderController::class, 'orderdetails']);


Route::get('/quickcheckout/{id}', [CheckoutController::class, 'quickCheckout'])->name('quickcheckout');
Route::get('/seodetails/{slug}', [SeoController::class,'seodetails'])->name('seodetails');
Route::get('/{slug}', [SeoController::class,'blogdetails'])->name('blogdetails');

Route::post('/send', [QuoteController::class, 'send'])->name('contact.send');

