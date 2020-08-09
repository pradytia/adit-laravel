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
    return view('welcome');
});

Route::get('/test', function () {
    return 'testing brother';
});

Route::get('/content', 'ContentsController@index');

Route::get('/customer', 'CustomerController@index');

Route::post('/customer/create', 'CustomerController@create');

Route::get('/customer/{customer_id}/delete', 'CustomerController@delete');

Route::get('/customer/{customer_id}/edit', 'CustomerController@edit');

Route::post('/customer/{customer_id}/update', 'CustomerController@update');
