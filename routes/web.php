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
// 具体的->抽象的なもの({'..'}など)へ(流れの順番)

// ホーム画面
Route::get('/', 'PostController@home');

// お茶について
Route::get('/about', 'PostController@about'); // 一覧

// 診断テスト
Route::get('/test', 'PostController@test'); // 診断一覧画面
Route::get('/test/tea', 'PostController@teaTest'); // 診断
Route::get('/test/herb', 'PostController@herbTest');
Route::get('/test/tea/result/{tea}', 'PostController@teaResult'); // 診断結果
Route::get('/test/herb/result/{id}', 'PostController@herbResult'); // {id}->PostControllerの$id(herbResult)

// ブログ機能
Route::get('/blog', 'PostController@blog'); // 一覧画面
Route::get('/blog/create', 'PostController@create'); // 作成
Route::post('/blog', 'PostController@store'); // 投稿
Route::get('/blog/{blog}', 'PostController@show'); // 詳細画面
Route::get('/blog/{blog}/edit', 'PostController@edit'); // 編集
Route::put('/blog/{blog}', 'PostController@update'); // 更新
Route::delete('/blog/{blog}', 'PostController@destroy'); // 削除

// ログイン機能
Auth::routes();