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
        $id=Auth::id();
        $trade=\DB::select("select * from products where who_trade=$id and confirm_trade=true");
        $history=\DB::select("select * from products where who_trade=$id and confirm_trade=false");
        return view('trade',[
            "trade"=>$trade,"history"=>$history
        ]);
    }
    public function parchase(){
        $id=Auth::id();
        $product_id=request()->get("product_id");
        $date=date('Y-m-d H:i:s');
        \DB::update("update products set confirm=false,who_trade=$id where product_id=$product_id");
        \DB::insert("insert into receives (receive_day,products_id,member_id) values(?,?,?)",[
            $date,$product_id,$id]);
        $trade=\DB::select("select * from products where who_trade=$id and confirm_trade=true");
        $history=\DB::select("select * from products where who_trade=$id and confirm_trade=false");
        return view('trade',[
            "trade"=>$trade,"history"=>$history
        ]);
    }
}
