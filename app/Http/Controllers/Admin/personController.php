<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;

class personController extends Controller
{
    //
    public function show($id)
    {
    	$data = \DB::table('person')->where('uid',$id)->get();
        // dd($data);
        if(empty($data[0])){
            return view('admin.user.stuPerson')->with('data',$data);
        }
    	$dat = \DB::table('users')->where('id',$id)->get();
    	$data[0]->uid = $dat[0]->userName;
    	$arr = explode(',',$data[0]->ke);
    	$array = array();
    	foreach($arr as $v){
    		if($v == ''){
    			continue;
    		}
    		else{
    			$array[] = $v;
    		}
    	}
    	$str = null;
    	foreach($array as $v){
    		$da = \DB::table('type')->where('id',$v)->get();
    		$str.= $da[0]->tname.' ';
    	}
    	$data[0]->ke = $str;
        // dd($data);
    	return view('admin.user.stuPerson')->with('data',$data);
    }

    public function create()
    {

    }

    public function destroy($id)
    {
        $data = \DB::table('person')->get();
        // $data = \DB::table()->where('id',$id)->delete();
        // echo json_encode($data);
    }

    public function edit($id)
    {

    }

    public function store()
    {

    }

    public function delPerson($id)
    {
         $data = \DB::table('person')->where('id',$id)->delete();
         return json_encode($data);
        // $data = \DB::table()->where('id',$id)->delete();
        
    }
}
