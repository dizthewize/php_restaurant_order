<?php

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

Route::get('/', 'PagesController@index');

Route::get('/contact', 'PagesController@getContact');

Route::get('foods/{food}', 'PagesController@show')->name('foods.show');

Auth::routes();

Route::prefix('manage')->middleware('role:superadministrator|administrator')->group(function () {
  Route::get('/', 'ManageController@index');

  Route::get('/dashboard', 'ManageController@dashboard')->name('manage.dashboard');

  Route::resource('users', 'UsersController');

  Route::resource('items', 'ItemsController');

  Route::get('orders/{type?}', 'OrderController@orders')->name('manage.orders');
});

Route::resource('cart', 'CartController');

Route::group(['middleware' => 'auth'], function () {
  Route::get('payment', 'CheckoutController@payment')->name('checkout.payment');
});

Route::post('store-payment', 'CheckoutController@storePayment')->name('payment.store');

// Route::get('checkout', 'CheckoutController@step1');
//
// Route::get('shipping', 'CheckoutController@shipping')->name('checkout.shipping');

// Route::get('test', function() {
//
//     dd(Auth::user()->id);
//
// });
