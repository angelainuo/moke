<?php

namespace App\Http\Controllers\Home;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;

class LoginController extends Controller
{
	public function doLogin(Request $request)
	{
		// dd($_POST['username']);
		$data = \DB::table('users')->where('email',$_POST['username'])->first();
			if($data){
				if($data->password == $_POST['password']){
					// dd(1);
					session()->set('user',$data);
					return redirect('home/index');
				}
		}
		
	}
}
