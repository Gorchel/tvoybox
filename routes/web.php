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

Route::get('/', ['uses' => 'HomeController@index']);
Route::post('/order/{callback?}', ['uses' => 'HomeController@order']);
Route::get('add_to_cart/{id}', ['uses' => 'HomeController@addToCart']);
Route::get('get_cart', ['uses' => 'HomeController@getCart']);
Route::get('delete_item/{id}', ['uses' => 'HomeController@delete_item']);
Route::get('update_count/{id}', ['uses' => 'HomeController@update_count']);

Route::get('box/{id}', ['uses' => 'BoxController@show']);

