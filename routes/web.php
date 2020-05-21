<?php

Route::get('/', 'LandingPageController@index')->name('landing-page');
Route::get('/shop', 'ShopController@index')->name('shop.index');
Route::get('/shop/{product}', 'ShopController@show')->name('shop.show');
Route::get('/cart', 'CartController@index')->name('cart.index');
Route::post('/cart', 'CartController@store')->name('cart.store');
Route::post('/cart/switchToSaveForLater/{product}', 'CartController@switchToSaveForLater')->name('cart.switchToSaveForLater');
Route::delete('/cart/{product}', 'CartController@destroy')->name('cart.destroy');

Route::post('/saveForLater/switchToCart/{product}', 'SaveForLaterController@switchToCart')->name('saveForLater.switchToCart');
Route::delete('/saveForLater/{product}', 'SaveForLaterController@destroy')->name('saveForLater.destroy');


Route::view('/product', 'product');
// Route::view('/cart', 'cart');
Route::view('/checkout', 'checkout');
Route::view('/thankyou', 'thankyou');
// Route::view('/ballsack', 'thankyou');

Route::get('empty', function(){
  Cart::instance('saveForLater')->destroy();
});