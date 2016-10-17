<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\model\models;

class userController extends Controller
{

    public function stu()
    {
    	$usr = new models();
    	$data = $usr->selectStu();
    	return view('admin.user.stu')->with('data',$data);
    }

    public function findStu(Request $request)
    {

    }

    public function teach()
    {
    	$usr = new models();
    	$data = $usr->selectTeach();
    	// dd($data);
    	return view('admin.user.teach',['data'=>$data]);
    }

    public function findTeach(Request $request)
    {

    }

    public function stuChange($id)
    {
        $data = \DB::table('users')->where('id',$id)->get();
        if($data[0]->status=='1'){
            \DB::table('users')->where('id',$id)->update(['status'=>'0']);
        }else{
            \DB::table('users')->where('id',$id)->update(['status'=>'1']);
        }
        $data = \DB::table('users')->where('id','=',$id)->get();
        return view('admin.user.stu')->with('data',$data);
    }

    public function teChange($id)
    {
        $data = \DB::table('users')->where('id',$id)->get();
        if($data[0]->status=='1'){
            \DB::table('users')->where('id',$id)->update(['status'=>'0']);
        }else{
            \DB::table('users')->where('id',$id)->update(['status'=>'1']);
        }
        $data = \DB::table('users')->where('id','=',$id)->get();
        return view('admin.user.teach')->with('data',$data);
    }

    public function admin()
    {
        $data = \DB::table('admin')->where('id','!=',1)->get();
        return view('admin.user.admin')->with('data',$data);
    }
}
