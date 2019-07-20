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

Route::get('/', 'HelloController@index');

Route::get('home', 'HomeController@index')->name('home');

Route::get('products', 'ProductsController@index')->name('products');

Route::get('products/input', 'ProductsController@inputViews')->name('input');
Route::post('products/input', 'ProductsController@postInput')->name('input.post');

Route::get('students', 'StudentController@getStudent')->name('student.get');