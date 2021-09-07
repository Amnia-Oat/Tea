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

Route::get('/', 'PostController@index');
Route::get('/test', 'PostController@test');
Route::get('/test/tea', 'PostController@teaTest');
Route::get('/test/tea/result/{tea}', 'PostController@teaResult');
Route::get('/test/herb', 'PostController@herbTest');
// {id}->PostControllerの$id(herbResult)
Route::get('/test/herb/result/{id}', 'PostController@herbResult');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');


