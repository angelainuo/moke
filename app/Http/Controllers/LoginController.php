<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

class LoginController extends Controller
{
	
    //2 执行登录 
    public function doLogin(Request $request)
    {
		$data=\DB::table('users')->where('email',$_POST['email'])->first();
		//dd($data);
		if($data){
		if($data->password == $_POST['password']){
			session()->set('user',$data);
			return view('index.index');
		}else{
			return back();
		}
	}else{
		return back();
	}
	}
	
	
}


