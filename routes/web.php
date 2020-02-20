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

Route::get('/','indexController@index');
Route::get('/service/{service}','ServiceController@index');
Route::get('contact', function () {
    return view('contact');
});

Route::get('/user/{user}/service/{service}','OrderController@show')->middleware('auth');
Route::get('vendors','VendorsController@index')->name('vendors');

//service crud
Route::get('view/{service}/service','ServiceController@show')->name('service.show')->middleware('auth');
Route::get('edit/{service}/service','ServiceController@edit')->name('service.edit')->middleware('auth');
Route::get('create/service','ServiceController@create')->name('service.create')->middleware('auth');
Route::get('remove/{service}/service','ServiceController@destroy')->name('service.destroy')->middleware('auth');
Route::post('store/service','ServiceController@store')->name('service.store')->middleware('auth');
Route::put('service/{service}/update','ServiceController@update')->name('service.update')->middleware('auth');

//request crud
Route::get('request/{order}/show','RequestController@show')->name('request.show');
//edit the status
Route::get('request/{order}/edit','RequestController@edit')->name('request.edit');
Route::post('request/{order}/update','RequestController@store')->name('status.update');
//Admin Routes

Route::group(['prefix' => 'admin-U', 'as' => 'admin.'], function () {
	Route::get('/home','AdminController@index')->name('home');
	Route::get('/services', 'AdminController@services')->name('services');
	Route::get('/users', 'AdminController@users')->name('users');
	Route::get('/vendors', 'AdminController@vendors')->name('vendors');
	Route::get('/orders', 'AdminController@orders')->name('orders');
});



Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

