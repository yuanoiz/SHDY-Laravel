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
    return view('layouts.index');
})->name('index');


Route::get('/shop', function () {
    return view('shops');
})->name('shops');


Route::get('/shop/product', function () {
    return view('product');
})->name('product');



Route::get('/shop/product/{productlist}', 'ShopController@index3');
Route::get('/shop', 'ShopController@index');
Route::get('/', 'ShopController@index2');
Route::get('/shop', 'ShopController@search')->name('shops.search');




