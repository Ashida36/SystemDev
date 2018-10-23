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

Route::get('/index', function () {
    $index=DB::select("select * from products");
    return view('index',[
        "index"=>$index
    ]);
});

Route::get('/login', function () {
    return view('login');
});

Route::get('/register', function () {
    return view('register');
});

Route::post('/register1',function(){
    $UserId=request()->get("UserID");
    $inputPassword=request()->get("inputPassword");
    $name=request()->get("name");
    $address=request()->get("address");
    $birth=request()->get("birth");

    DB::insert("insert into members (member_user,member_name,member_password,member_address,member_birth) values (?,?,?,?,?)",[
        $UserId,$inputPassword,$name,$address,$birth
    ]);
    return view('login');
});

Route::get('/productRegister', function () {
    $index=DB::select("select * from products");
    return view('productRegister',[
        "index"=>$index
    ]);
});

Route::get('/productRegister1',function(){
    $category=request()->get("category1");
    $productName=request()->get("productName1");
    $productValue=request()->get("productValue");
    DB::insert("insert into products (product_category,product_name,product_price,members_id) values (?,?,?,?)",[
        $category,$productName,$productValue,1
    ]);
    return redirect('productRegister');
});

Route::get('/trade', function () {
    $index=DB::select("select * from products,members");
    return view('trade',[
        "index"=>$index
    ]);
});

Route::get('/tradeManage', function () {
    return view('tradeManage');
});

Route::get('/Manager', function () {
    $member=DB::select("select * from members");
    return view('Manager',[
        "member"=>$member
    ]);
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