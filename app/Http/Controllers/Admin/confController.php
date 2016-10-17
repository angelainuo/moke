<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;

class confController extends Controller
{
    //
    public function config(Request $request)
	{
		$arr = $request->input();
		// dd($_FILES);
		if(empty($_FILES['file']['name'])){
			$str = '<?php  const img="default";';
		}else{
			if($request->hasFile('file')){
				$file = $request->file('file');
				if($file->isValid()){
					$picname = $file->getClientOriginalName();
					$ext = $file->getClientOriginalExtension();
					$filename = time().rand(1000,9999).'.'.$ext;
					$path = "/img/";
					$file->move($path,$filename);
					$str = '<?php  const img="'.$path.$filename.'";';
				}
			}
		}
		// dd($str);
		foreach($arr as $k=>$v){
			if($k=="_token"){
				continue;
			}
			$str.= 'const'.' '.$k.'='."'".$v."'".';';
		}
		// dd($str);
		$res = file_put_contents('D:\xamp\anzhuang\htdocs\laravel\laravelxm\resources\views\admin\config\conf.blade.php',$str);
		if($res>0){
			return view('admin.config.config');
		}else{
			return '配置失败';
		}
	}
}
