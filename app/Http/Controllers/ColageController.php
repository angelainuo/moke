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
}
