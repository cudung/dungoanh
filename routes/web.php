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
Route::get('/','Homecontroller@login');
Route::get('/login','Homecontroller@login');
Route::post('/login','Homecontroller@postLogin');
Route::get('products', 'Homecontroller@products');
// Route::get('user/{id}', 'ShowProfile/__invoke');
Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
