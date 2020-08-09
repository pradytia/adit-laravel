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

Route::get('/', function () {
    return view('home');
});

Route::get('/login', 'AuthController@login')->name('login');
Route::post('/postlogin', 'AuthController@postlogin');
Route::get('/logout', 'AuthController@logout');

// Route::get('/register', 'AuthController@register');

Route::group(['middleware'=>'auth'], function(){

    Route::get('/dashboard', 'DashboardController@index');
    Route::get('/content', 'ContentsController@index');
    
    Route::get('/customer', 'CustomerController@index');
    Route::post('/customer/create', 'CustomerController@create');
    Route::get('/customer/{customer_id}/delete', 'CustomerController@delete');
    Route::get('/customer/{customer_id}/edit', 'CustomerController@edit');
    Route::post('/customer/{customer_id}/update', 'CustomerController@update');
    
    Route::get('/product', 'ProductController@index');
    Route::post('/product/create', 'ProductController@create');
    Route::get('/product/{product_id}/edit', 'ProductController@edit');
    Route::get('/product/{product_id}/delete', 'ProductController@delete');
    Route::post('/product/{product_id}/update', 'ProductController@update');
});
