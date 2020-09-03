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

Route::get('/products/menu','ProductController@menu');

Route::get('/customers/list','CustomerController@list');

Route::get('/customers/show/{city}','CustomerController@show');

Route::get('/products/price','ProductController@price');

