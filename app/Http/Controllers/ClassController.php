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
      return view('index.community',['list'=>$list]);
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
    // public function shouye(){
    //   $list=\DB::table('class')->get();
    //   $content=\DB::table('post')->get();
    //   $college=\DB::table('college')->();
    //   return view('index.index',['list'=>$list,'content'=>$content,'college'=>$college]);
    // }

}
