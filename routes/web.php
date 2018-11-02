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

Route::prefix('admin')->group(function() {
    Route::get('/login', 'Auth\AdminLoginController@showLoginForm')->name('admin.login');
    Route::post('/login', 'Auth\AdminLoginController@login')->name('admin.login.submit');
    Route::post('/logout','AdminController@logout')->name('admin.logout');
    Route::get('/', 'AdminController@index')->name('admin.dashboard');
});

Route::get('/tradeManage','tradeManageController@index');