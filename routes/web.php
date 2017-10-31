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

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', ['HomeController@index',
'uses'=>'ProductController@getIndex'])->name('home');
Route::get('/add-to-cart/{id}',[
  'uses'=>'ProductController@getAddToCart',
  'as'=>'product.addToCart'
]);
Route::get('/shoppingCart',[
  'uses'=>'ProductController@getCart',
  'as'=>'product.shoppingCart'
]);

Route::get('/checkout',[
  'uses'=>'ProductController@getCheckout',
  'as'=>'checkout'
]);
Route::post('/checkout',[
  'uses'=>'ProductController@postCheckout',
  'as'=>'checkout'
]);
