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
Route::get('/logout', 'AuthController@logout');
Route::post('/postlogin', 'AuthController@postlogin');


Route::get('/dashboard', 'DashboardController@index')->middleware('auth');
Route::get('/content', 'ContentsController@index')->middleware('auth');
Route::get('/customer', 'CustomerController@index')->middleware('auth');
Route::post('/customer/create', 'CustomerController@create')->middleware('auth');
Route::get('/customer/{customer_id}/delete', 'CustomerController@delete')->middleware('auth');
Route::get('/customer/{customer_id}/edit', 'CustomerController@edit')->middleware('auth');
Route::post('/customer/{customer_id}/update', 'CustomerController@update')->middleware('auth');