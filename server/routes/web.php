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
    return view('/auth/login');
});

// 投稿一覧画面
Route::get('/index', 'boardController@index');
Route::get('/edit/{id}', 'boardController@edit');
Route::post('/create', 'boardController@create');
Route::post('/save', 'boardController@save');
Route::post('/delete', 'boardController@delete');

Auth::routes();

Route::get('/home', 'HomeController@index');