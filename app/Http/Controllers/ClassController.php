<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

class ClassController extends Controller
{
    public function index(){
    	$list=\DB::table('class')->get();
    	return view('index.courses',['list'=>$list]);
    }
}
