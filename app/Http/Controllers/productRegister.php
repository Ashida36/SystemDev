<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class productRegister extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }
    public function register(){
        $id=Auth::id();//認証済みのid取得
        $category=request()->get("category1");
        $productName=request()->get("productName1");
        $productValue=request()->get("productValue");
        \DB::insert("insert into products (product_category,product_name,product_price,users_id) values (?,?,?,?)",[
        $category,$productName,$productValue,$id
        ]);
        return redirect('productRegister');
}
    public function index(){
        $id=Auth::id();
        $product=\DB::select("select * from products where users_id=$id and confirm=1");
        return view('productRegister',[
            "product"=>$product
        ]);
    }
}
