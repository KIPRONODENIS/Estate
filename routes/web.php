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

Route::get('vendors','VendorsController@index')->name('vendors');

//Admin Routes
Route::get('/admin-view','AdminController@index');
Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

