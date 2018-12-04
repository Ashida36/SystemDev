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



Route::get('/productRegister1','productRegister@register');

Route::get('/call','callController@index');

Route::get('/productRegister','productRegister@index');

Route::get('/trade','tradeController@index');

Auth::routes();

/*
|--------------------------------------------------------------------------
| 1) User 認証不要
|--------------------------------------------------------------------------
*/
Route::get('/', function () { return redirect('/home'); });

/*
|--------------------------------------------------------------------------
| 2) User ログイン後
|--------------------------------------------------------------------------
*/
Route::group(['middleware' => 'auth:user'], function() {
    Route::get('/home', 'HomeController@index')->name('home');
    Route::get('/', 'HomeController@index')->name('home');
});
/*
|--------------------------------------------------------------------------
| 3) Admin 認証不要
|--------------------------------------------------------------------------
*/
Route::group(['prefix' => 'admin'], function() {
    Route::get('/',         function () { return redirect('/admin/home'); });
    Route::get('login',     'Admin\LoginController@showLoginForm')->name('admin.login');
    Route::post('login',    'Admin\LoginController@login');
});
/*
|--------------------------------------------------------------------------
| 4) Admin ログイン後
|--------------------------------------------------------------------------
*/
Route::group(['prefix' => 'admin', 'middleware' => 'auth:admin'], function() {
    Route::post('logout',   'Admin\LoginController@logout')->name('admin.logout');
    Route::get('home',      'Admin\HomeController@index')->name('admin.home');
    Route::get('tradeManage','Admin\tradeManageController@index')->name('admin.tradeManage');
    Route::get('stockManage','Admin\stockManageController@index')->name('admin.stockManage');
    Route::get('sendManage','Admin\sendManageController@index')->name('admin.sendManage');
    Route::get('paymentsManage','Admin\paymentsManageController@index')->name('admin.paymentsManage');
    Route::post('stocked','Admin\stockManageController@stocked')->name('admin.stocked');
    Route::post('sended','Admin\sendManageController@sended')->name('admin.sended');
    Route::post('payed','Admin\paymentsManageController@payed')->name('admin.payed');
});

Route::post('/parchase','tradeController@parchase');
Route::post('/search','HomeController@search');
