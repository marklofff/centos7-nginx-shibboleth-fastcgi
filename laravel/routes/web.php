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

/*----------------------------
フロント
-----------------------------*/
Route::get('/', 'Front\TopController@index')->middleware('user');

//Route::get('/', function () {
//    return view('welcome');
//});

//Routeで処理するパターン
//Route::get('/', 'TopController@index')->middleware('user');

//履歴コース一覧
Route::any('/course', function(){
	return view('front.site.course.index');
});

//キャリアビジョン
Route::any('/career', function(){
        return view('front.site.career.index');
});

Route::any('/career/list', function(){
        return view('front.site.career.list');
});


//プロフィール
Route::any('/profile', 'Front\MemberController@index')->middleware('user');

//お問い合わせ
Route::get('/contact', 'Front\ContactController@index');
Route::post('/contact/confirm', 'Front\ContactController@confirm');
Route::any('/contact/complete', 'Front\ContactController@complete');

//成果物登録
Route::get('/delivery/submit/{id}', 'Front\DeliveryController@input');

//お知らせ
Route::get('/info', 'Front\InfoController@index');

//成果物
Route::get('/delivery/', 'Front\DeliveryController@index');
Route::get('/delivery/detail/{id}', 'Front\DeliveryController@detail');

//ケイパビリティ
Route::get('/capability/', 'Front\CapabilityController@index');

