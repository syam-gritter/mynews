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

Route::group(['prefix' => 'admin','middleware' => 'auth'],function(){
    Route::get('news/create','Admin\NewsController@add')->middleware('auth');
    Route::post('news/create','Admin\NewsController@create')->middleware('auth');
    Route::post('profile/create','Admin\ProfileController@create')->middleware('auth');
    Route::get('profile/create','Admin\ProfileController@add')->middleware('auth');
    Route::get('profile/edit','Admin\ProfileController@edit')->middleware('auth');
    Route::post('profile/edit','Admin\ProfileController@update')->middleware('auth');
});

/*
課題の３↓

「http://XXXXXX.jp/XXX というアクセスが来たときに、
 AAAControllerのbbbというAction に渡すRoutingの設定」
を書いてみてください。

Route::get(['XXX','AAAController@bbb']);


*/
Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

