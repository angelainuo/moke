<?php
namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\model\models;

class classController extends Controller
{
    public function aClass()
    {
    	$class = new models();
    	$data = $class->selectClass();
    	// dd($data);
    	return view('admin.text.class')->with('data',$data);
    }

    public function school()
    {
    	$school = new models();
    	$data = $school->selectSchool();
    	return view('admin.text.school')->with('data',$data);
    }

    public function sClass($id)
    {
    	$school = new models();
    	$data = $school->sClass($id);
    	// dd($data);
    	return view('admin.text.sClass',['data'=>$data,'id'=>$id]);
    }

    public function reply($id)
    {
    	$data = \DB::table('reply')->where('id','=',$id)->get();
    	return json_encode($data);
    }

    public function talk()
    {
    	// $talk = new models();
    	// $data = $talk->selectTalk();
    	$data = \DB::table('reply')->get();
    	return view('admin.suggest.talk')->with('data',$data);
    }

    public function talka($id)
	{
		$data = \DB::table('reply')->where('id',$id)->get();
		if($data[0]->eltile=='1'){
			\DB::table('reply')->where('id',$id)->update(['eltile'=>'0']);
		}else{
			\DB::table('reply')->where('id',$id)->update(['eltile'=>'1']);
		}
		$data = \DB::table('reply')->where('id','=',$id)->get();
		return view('admin.suggest.talk')->with('data',$data);
	}

    public function aSchool()
    {
        $data = \DB::table('type')->where('level',1)->get();
        return view('admin.text.aSchool')->with('data',$data);
    }

	public function addSchool(Request $request)
    {
        // dd($_POST);
        if($request->input('sname') == ''){
            return back();
        }else{
            $id = \DB::table('college')->insertGetId(['cname'=>$request->input('sname')]);
            if($id>0){
                if(!empty($request->input('type'))&&!empty($request->input('file'))){
                    dd($request->input('file'));
                }
            }
        }
    }

    public function addClass($id)
    {
        $data = \DB::table('type')->where('level',1)->get();
        $cname = \DB::table('college')->where('id',$id)->value('cname');
        return view('admin.text.aClass',['data'=>$data,'id'=>$id,'cname'=>$cname]);
    }

    public function insertClass(Request $request)
    {
         // $res = $request->input();
         if($request->hasFile('file')){
            $file = $request->file('file');
            if($file->isValid()){
                $picname = $file->getClientOriginalName();
                $ext = $file->getClientOriginalExtension();
                $filename = time().rand(1000,9999).'.'.$ext;
                $path = "/img/";
                $file->move($path,$filename);     
            }
        }
        if($request->input('cname')==''){
            return back();
        }
        // $id = \DB::table('class')->insertGetId('cid'=>$request->input('id'),'cid'=>$request->input('cid'));
    }

    public function delClass($id)
    {
        $data = \DB::table('class')->where('id',$id)->delete();
        if($data)
        {
            return back();
        }else{
            return '删除失败';
        }
    }
}
