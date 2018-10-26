<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AdminController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth:admin');
    }
    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function logout(){
        return view('auth.admin-login');
    }
    public function index()
    {
        $users=\DB::table('users')->get();
        return view("Manager",['users'=>$users]);
    }
}
