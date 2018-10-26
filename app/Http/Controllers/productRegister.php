<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class productRegister extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }
    public function index(){
        return view("productRegister");
    }
}
