<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class tradeController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }
    public function index(){
        return view("trade");
    }
    public function parchase(){
        $id=Auth::id();
        $product_id=request()->get("product_id");
        \DB::update("update products set confirm=0 where product_id=$product_id");
        $trade=\DB::select("select * from products where users_id=$id");
        return view('trade',[
            "trade"=>$trade
        ]);
    }
}
