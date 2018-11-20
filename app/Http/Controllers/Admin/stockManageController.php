<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class stockManageController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth:admin');
    }
    public function index(){
        $stock=\App\Stock::all();
        return view("admin.stockManage",[
            "stock"=>$stock
        ]);
    }
    public function stocked(){
        $date=date('Y-m-d H:i:s');
        $receives_id=request()->get("stock");
        $products=\App\Receive::where('receive_id','=',$receives_id)->get();
        $product_id=0;
        foreach($products as $product) {
            $product_id=$product->product->product_id;
            }
        \DB::insert("insert into stocks(stock_day,products_id,receives_id) values(?,?,?)",[
                  $date,$product_id,$receives_id]);
        $stock=\App\Stock::all();
        return view("admin.stockManage",[
            "stock"=>$stock
        ]);
    }
}
