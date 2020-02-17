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
Route::get('create/service','ServiceController@create')->name('service.create')->middleware('auth');
Route::post('store/service','ServiceController@store')->name('service.store')->middleware('auth');
//Admin Routes
Route::get('/admin-view','AdminController@index');
Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

