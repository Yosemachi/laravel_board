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
    return view('welcome');
});

// 投稿一覧画面
Route::get('/index', 'boardController@index');
Route::get('/edit/{id}', 'boardController@edit');
Route::get('/create', 'boardController@create');
Route::get('/save', 'boardController@save');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
