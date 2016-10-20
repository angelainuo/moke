<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

class ColageController extends Controller
{
  public function index(){
    $list=\DB::table('college')->get();
    return view('index.partners',['list'=>$list]);
  }
  public function cla($id){
    // $list=\DB::table('class')->where('id',$id);
    $list=\DB::select("select * from class where iid=$id");
    return view('index.class',['list'=>$list]);
  }
  public function shouye(){
    $list=\DB::table('class')->get();
    $data=\DB::table('college')->get();
    $post=\DB::table('post')->get();
    return view('index.index',['list'=>$list,'data'=>$data,'post'=>$post]);
  }
  public function post($id){

    $list=\DB::select("select * from post,users where post.id=$id and post.uid=users.id");

    $data=\DB::select("select * from reply,post,users where reply.pid=$id and reply.uid=users.id and reply.pid=post.id");


    return view('index.content',['list'=>$list,'data'=>$data]);
  }
  public function geren(){
    // $list=\DB::table('users')->get();
    return view('geren.geren');
  }
  public function xiugai(){
    return view('geren.xiugai');
  }
  public function huifu(Request $request){
    $data=$request->only('pid','uid','contents');
    $id=\DB::table('reply')->insertGetId($data);
    if($id > 0){
      $list=\DB::table("tell")->get();
      $post=\DB::table("post")->get();
      return view('index.community',['list'=>$list,'post'=>$post]);
    }

  }
  public function tiezi(Request $request){
    $data=$request->only('uid','title','content');
    $id=\DB::table('post')->insertGetId($data);
    if($id > 0){
      $list=\DB::table("tell")->get();
      $post=\DB::table("post")->get();
      return view('index.community',['list'=>$list,'post'=>$post]);
    }

  }
}
