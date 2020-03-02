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

Route::get('/', 'FrontController@index');
Route::get('/news', 'FrontController@news');


Auth::routes();

Route::group(['middleware' => ['auth']], function () {

Route::get('/home', 'HomeController@index');

Route::get('/home/News/index', 'NewsController@index');
Route::post('/home/News/index/Store', 'NewsController@store');
Route::post('/home/News/index/update', 'NewsController@edit');
Route::post('/home/News/index/delete', 'NewsController@delete');

});
