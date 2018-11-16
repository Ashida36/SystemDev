<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class tradeManageController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth:admin');
    }
    public function index(){
        //$trade=\DB::select("select * from products where and confirm_trade=true");
        $trade=\App\Receive::where('confirm','=',true)->get();
        //$history=\DB::select("select * from products where and confirm_trade=false");
        $history=\App\Receive::where('confirm','=',false)->get();
        return view('admin.tradeManage',[
            "trade"=>$trade,"history"=>$history
        ]);
    }
}
