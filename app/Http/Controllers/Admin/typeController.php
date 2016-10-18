<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\model\models;

class typeController extends Controller
{

	public function type()
	{
		$type = new models();
		$data = $type->selectType();
		// dd($data);
		return view('admin.type.type')->with('data',$data);
	}

	public function stype($id)
	{
		$type = new models();
		$data = $type->selectStype($id);
		return view('admin.type.stype',['data'=>$data]);
	}

	public function astype($id)
	{
		return view('admin.type.astype')->with('id',$id);
	}

	public function addStype(Request $request)
	{
		$type = new models();
		$data = $type->insertStype($request);
		 if($data>0){
            return $this->stype($request->input('bid'));
        }else{
            return '添加失败';
        }
	}

	public function ustype($id)
	{
		$type = new models();
		$data = $type->ustype($id);
	// dd($data);
		return view('admin.type.ustype')->with('data',$data);
	}

	public function updateStype(Request $request)
	{
		$type = new models();
    dd($type);
		$data = $type->updateStype($request);
		if($data>0)
		{
			return view('admin.index.index');
		}
		else{
			return '更新失败';
		}
	}

	public function dStype($id)
	{
		$type = new models();
		$data = $type->deleteStype($id);
		return $data;
	}

	public function utype($id)
	{
		$type = new models();
		$data = $type->utype($id);
		return view('admin.type.utype')->with('data',$data);
	}

	public function updateType(Request $request,$id)
	{
		$data = $request->only("tname","id");
    \DB::table("type")->where("id",$id)->update($data);

		// $data = \DB::update('update users set tname = $request where id');
    dd($data);
		if($data>0)
		{
			return view('admin.index.index');
		}
		else{
			return '更新失败';
		}
	}

	public function dType($id)
	{
		$type = new models();
		$data = $type->deleteType($id);
		return $data;
	}

	public function atype()
	{
		return view('admin.type.atype');
	}

	public function addType(Request $request)
	{
		$type = new models();
		$data = $type->addType($request);
		if($data>0)
		{
			return back();
		}else{
			return '添加失败';
		}
	}
}
