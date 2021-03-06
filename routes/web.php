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

// Route::get('user/{id}', 'ShowProfile/__invoke');


Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::post('register', 'Auth\RegisterController@register');

Route::get('/logout', 'Auth\LoginController@logout');

Route::get('/add_product', 'Product@add_product');

