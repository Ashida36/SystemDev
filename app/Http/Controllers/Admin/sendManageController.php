<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class sendManageController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth:admin');
    }
    public function index(){
        $send=\App\Send::all();
        return view("admin.sendManage",[
            "send"=>$send
        ]);
    }
    public function sended(){
        $date=date('Y-m-d H:i:s');
        $receives_id=request()->get("send");
        $stock=\App\Stock::where('receives_id','=',$receives_id)->get();
        $stock_id=0;
        $product_id=0;
        foreach($stock as $stocks){
            $stock_id=$stocks->stock_id;
            $product_id=$stocks->products_id;
        }
        \DB::update("update receives set syukko=true where receive_id=$receives_id");
        \DB::insert("insert into sends(send_day,stocks_id,products_id,receives_id) values(?,?,?,?)",[
            $date,$stock_id,$product_id,$receives_id]);
        $send=\App\Send::all();
        return view("admin.sendManage",[
            "send"=>$send
        ]);
    }
}
