<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

class ColageController extends Controller
{
  public function index(){
    $list=\DB::table('collage')->get();
    return view('index.partners',['list'=>$list]);
  }
}
