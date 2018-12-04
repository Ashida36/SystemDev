<?php

namespace App\Http\Controllers;

use App\Product;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $product=\App\Product::where('confirm','=',true)->get();
        return view('home',[
            "product"=>$product
        ]);
    }
    public function search(){
        $category=request()->get("category");
        $name=request()->get("productName");
        $money=request()->get("money");
        $product=\DB::select("select * from products where product_category=$category and product_name=$name and product_price <= $money and confirm=true");
        return view('home',[
            "product"=>$product
        ]);
    }
}
