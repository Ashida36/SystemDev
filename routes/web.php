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



Route::get('/productRegister1',function(){
    $category=request()->get("category1");
    $productName=request()->get("productName1");
    $productValue=request()->get("productValue");
    DB::insert("insert into products (product_category,product_name,product_price,members_id) values (?,?,?,?)",[
        $category,$productName,$productValue,1
    ]);
    return redirect('productRegister');
});

Route::get('/tradeManage', function () {
    return view('tradeManage');
});

Route::get('/paymentsManage', function () {
    return view('paymentsManage');
});

Route::get('/salesManage', function () {
    return view('salesManage');
});

Route::get('/sendManage', function () {
    return view('sendManage');
});

Route::get('/stockManage', function () {
    return view('stockManage');
});

Route::get('/loginManage', function () {
    return view('loginManage');
});
Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::get('/', 'HomeController@index')->name('home');

Route::get('/productRegister','productRegister@index');

Route::get('/trade','tradeController@index');

Auth::routes();

/*
|--------------------------------------------------------------------------
| 1) User 認証不要
|--------------------------------------------------------------------------

Route::get('/', function () { return redirect('/home'); });


|--------------------------------------------------------------------------
| 2) User ログイン後
|--------------------------------------------------------------------------

Route::group(['middleware' => 'auth:user'], function() {
    Route::get('/home', 'HomeController@index')->name('home');
});
*/
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
});
Route::get('/tradeManage','tradeManageController@index');