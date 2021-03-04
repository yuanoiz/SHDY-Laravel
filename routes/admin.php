<?php

Auth::routes();

Route::get('/dashboard', 'HomeController@index')->name('dashboard')->middleware('auth');
Route::get('/dashboard/create', 'HomeController@index2')->name('dashboard.create')->middleware('auth');
Route::get('/dashboard/recommend', 'HomeController@index3')->name('dashboard.recommend')->middleware('auth');



Route::get('/', function () {
    return view('admin.login');
})->name('/');


Route::get('register', function () {
    return view('admin.login');
})->name('register');


Route::get('/dashboard', 'ShopController@seriesindex')->middleware('auth');
Route::post('/dashboard', 'ShopController@seriesstore')->name('dashboard.store')->middleware('auth');
Route::delete('/dashboard/{serieslist}', 'ShopController@seriesdestroy')->name('dashboard.destory')->middleware('auth');
Route::put('/dashboard/{serieslist}', 'ShopController@seriesupdate')->name('dashboard.update')->middleware('auth');

Route::get('/dashboard/create', 'ShopController@createindex')->middleware('auth');
Route::post('/dashboard/create', 'ShopController@createstore')->name('dashboard.create')->middleware('auth');
Route::delete('/dashboard/create/{productlist}', 'ShopController@productlistdestroy')->name('dashboard.create.destory')->middleware('auth');
Route::put('/dashboard/create/{productlist}', 'ShopController@productlistupdate')->name('dashboard.create.update')->middleware('auth');

Route::get('/dashboard/recommend', 'ShopController@recommendindex')->middleware('auth');
Route::post('/dashboard/recommend', 'ShopController@recommendstore')->name('dashboard.recommend')->middleware('auth');
Route::delete('/dashboard/recommend/{recommend}', 'ShopController@recommenddestroy')->name('dashboard.recommend.destory')->middleware('auth');
Route::put('/dashboard/recommend/{recommend}', 'ShopController@recommendupdate')->name('dashboard.recommend.update')->middleware('auth');
