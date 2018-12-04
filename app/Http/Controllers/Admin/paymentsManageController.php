<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class paymentsManageController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth:admin');
    }
    public function index(){
        $pay=\App\Payment::all();
        return view("admin.paymentsManage",[
            "pay"=>$pay
        ]);
    }
    public function payed(){
        $receives_id=request()->get("pay");
        \DB::update("update receives set nyuukin=true where receive_id=$receives_id");
        \DB::insert("insert into payments(payment_confirm,manages_id,receives_id) values(?,?,?)",[
            true,1,$receives_id]);
        $pay=\App\Payment::all();
        return view("admin.paymentsManage",[
            "pay"=>$pay
        ]);
    }
}
