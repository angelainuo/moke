<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

class ClassController extends Controller
{
    public function index(){
    	// $list=\DB::select("select * from type,class");
      $list=\DB::select("select * from class,collage,type where class.tid=type.id and class.cid=collage.id");
      $data=\DB::table("type")->get();
      $collage=\DB::table("collage")->get();
    	return view('index.courses',['list'=>$list,'data'=>$data,'collage'=>$collage]);
    }
}
