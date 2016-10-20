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
			$list=\DB::table('class')->get();
			$data=\DB::table('college')->get();
			$post=\DB::table('post')->get();
			return view('index.index',['list'=>$list,'data'=>$data,'post'=>$post]);
    }
}
