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

use App\Http\Controllers\HelloController;
use App\Http\Middleware\HelloMiddleware;

Route::get('/', function () {
    return view('welcome');
});

// use App\Http\Middleware\HelloMiddleware;
Route::get('hello','HelloController@index')->middleware('auth');

Route::post('hello', 'HelloController@post');

//作成処理
Route::get('hello/add', 'HelloController@add');
Route::post('hello/add', 'HelloController@create');

// 更新処理
Route::get('hello/edit', 'HelloController@edit');
Route::post('hello/edit', 'HelloController@update');

//  削除処理
Route::get('hello/del', 'HelloController@del');
Route::post('hello/del', 'HelloController@remove');

//指定したレコードの取得
Route::get('hello/show','HelloController@show');

Route::get('person','PersonController@index');

//検索処理
Route::get('person/find', 'PersonController@find');
Route::post('person/find', 'PersonController@search');

//登録処理
Route::get('person/add', 'PersonController@add');
Route::post('person/add', 'PersonController@create');

//更新処理
Route::get('person/edit', 'PersonController@edit');
Route::post('person/edit', 'PersonController@update');

//削除処理
Route::get('person/del', 'PersonController@delete');
Route::post('person/del', 'PersonController@remove');

//ボード表示画面
Route::get('board', 'BoardController@index');

//登録処理
Route::get('board/add', 'BoardController@add');
Route::post('board/add', 'BoardController@create');

//rest
Route::resource('rest', 'RestappController');

Route::get('hello/rest', 'HelloController@rest');

//セッションの利用
Route::get('hello/session', 'HelloController@ses_get');
Route::post('hello/session', 'HelloController@ses_put');


Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::get('hello/auth', 'HelloController@getAuth');
Route::post('hello/auth', 'HelloController@postAuth');
