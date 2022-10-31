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

Route::get('/top', 'ShowController@index');
Route::get('/', 'ShowController@index');

Route::post('/spendings/top', 'RegisterController@register');
Route::get('/spendings/top', 'GetDataController@getdata');

Route::get('/spendings/register', 'RegisterController@view');

Route::get('/spendings/past', 'GetDataController@pastdata');

/*
Route::get('/spendings/{item}', 'GetDataController@item');
*/
Route::get('/spendings/edit', 'GetDataController@edit_data');
Route::get('/spendings/edit/{spending}', 'ShowController@show');
Route::get('/spendings/edit/{spending}', 'ShowController@show_edit');
Route::put('/spendings/edit/{spending}', 'ShowController@update');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
