<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

class LogoutController extends Controller
{
	
    public function logout()
    {
    	//清空session
    	session()->forget("user");
    	//实现页面跳转
    	return view('index.index');
    }
}


