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
    return view('/blog/home');
});

Route::get('/blog', 'BlogController@index');
Route::get('/blog/home', 'BlogController@index');
  //Route::get('/blog/{id}', 'BlogController@show');
Route::get('/blog/data_customer', '_DataCustomer@index');
  //Route::get('/blog/data_customer/{id}', 'BlogController@show');
