<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

class ClassController extends Controller
{
    public function index(){
    	// $list=\DB::select("select * from type,class");
      $list=\DB::select("select * from class,college,type where class.tid=type.id and class.cid=college.id");
      $data=\DB::table("type")->get();
      $college=\DB::table("college")->get();
    	return view('index.courses',['list'=>$list,'data'=>$data,'college'=>$college]);
    }
    public function community(){
      $list=\DB::table("tell")->get();
      $post=\DB::table("post")->get();
      return view('index.community',['list'=>$list,'post'=>$post]);
    }
    public function type($tid){
      $list=\DB::select("select * from class,college,type where class.tid=$tid and class.tid=type.id and class.cid=college.id");
      $data=\DB::table("type")->get();
      $college=\DB::table("college")->get();
    	return view('index.courses',['list'=>$list,'data'=>$data,'college'=>$college]);
    }
    public function collage($cid){
      $list=\DB::select("select * from class,college,type where class.cid=$cid and class.tid=type.id and class.cid=college.id");
      $data=\DB::table("type")->get();
      $college=\DB::table("college")->get();
    	return view('index.courses',['list'=>$list,'data'=>$data,'college'=>$college]);
    }


}
