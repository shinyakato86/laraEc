<?php

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

Route::get('/', 'ShopController@index')->name('shop.list');
Route::get('/mycart', 'ShopController@myCart')->middleware('auth');



Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
Route::post('/mycart', 'ShopController@addMycart')->name('shop.cart')->middleware('auth');;
Route::post('/cartdelete','ShopController@deleteCart')->name('shop.delete')->middleware('auth');;
Route::post('/checkout', 'ShopController@checkout')->name('shop.check')->middleware('auth');;