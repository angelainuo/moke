<?php

namespace App\model;

use Illuminate\Database\Eloquent\Model;
use App\Http\Controllers\Admin\userController;
use App\Http\Controllers\Admin\tellController;

class models extends Model
{
    //
    protected $table = 'news';

    public function selectStu()
    {
    	$data = \DB::table('users')->where('ident','=','学生')->get();
    	return $data;
    }

    public function selectTeach()
    {
    	$data = \DB::table('users')->where('ident','=','老师')->get();
    	return $data;
    }

    public function selectTell($ob)
    {
        $where = [];
        if(!empty($ob->input('title'))){
            // dd($ob->input('title'));
            $where = ['title'=>$ob->input('title')];
            $data = \DB::table('tell')->where($where)->paginate(3);
            // dd($data);
        }
        else{
            $data = \DB::table('tell')->paginate(3);
        }
        return $data;
    }

    public function deleteTell($id)
    {
        $data = \DB::table('tell')->where('id','=',$id)->delete();
        if($data){
            return back();
        }
        else{
            return back()->with('msg','删除失败');
        }
    }

    public function insertTell($data)
    {
        // dd($data->input('title'));
        $id = \DB::table('tell')->insertGetId(['title'=>$data->input('title'),'content'=>$data->input('content'),'mtime'=>$data->input('mtime'),'loseTime'=>$data->input('loseTime')]
            );
        if($id>0){
            return $id;
        }
        else{
            return '添加失败';
        }
    }

    public function selectType()
    {
        $data = \DB::table('type')->where('level','=',1)->get();
        return $data;
    }

    public function selectStype($id)
    {
        if(!explode('-',$id,-1))
        { 
            $data = \DB::table('type')->where('bid','=','2-'.$id)->get();
        }
        else{
            $data = \DB::table('type')->where('bid','=',$id)->get();
        }
        return $data;
    }

    public function insertStype($data)
    {
        $id = \DB::table('type')->insertGetId(['tname'=>$data->input('tname'),'detail'=>$data->input('detail'),'level'=>2,'bid'=>$data->input('bid'),'school'=>'']
            );
        if($id>0){
            return $id;
        }
        else{
            return '添加失败';
        }
    }

    public function ustype($id)
    {
        $data = \DB::table('type')->where('id','=',$id)->get();
        return $data;
    }

    public function updateStype($ob)
    {
        $data = \DB::table('type')->where('id','=',$ob->input('id'))->update(['tname'=>$ob->input('tname'),'detail'=>$ob->input('detail')]);
        return $data;
    }

    public function deleteStype($id)
    {
         $data = \DB::table('type')->where('id','=',$id)->delete();
         if($data){
            return back();
        }
        else{
            return back()->with('msg','删除失败');
        }
    }

     public function utype($id)
    {
        $data = \DB::table('type')->where('id','=',$id)->get();
        return $data;
    }

     public function updateType($ob)
    {
        $data = \DB::table('type')->where('id','=',$ob->input('id'))->update(['detail'=>$ob->input('detail')]);
        return $data;
    }

     public function deleteType($id)
    {
        $num = count($this->selectStype($id));
        if($num !=0)
        {
            return back();
        }
        else{
            $data = \DB::table('type')->where('id','=',$id)->delete();
            if($data){
                return back();
            }
            else{
                return back()->with('msg','删除失败');
            }
        }
    }

    public function allType()
    {
        $data = \DB::table('type')->get();
        return $data;
    }

    public function addType($data)
    {
        $a=$this->allType();
        $num = count($a)+1;
        $id = \DB::table('type')->insertGetId(['tname'=>$data->input('tname'),'detail'=>$data->input('detail'),'level'=>1,'bid'=>'1-'.$num,'school'=>'']);
        return $id;
    }

    public function findAllType($id)
    {
        $data = \DB::table('type')->where('id','=',$id)->get();
        return $data;
    }

    public function selectClass()
    {
        $class = array();
        $data = \DB::table('class')->get();
        foreach($data as $v){
            $val = $this->findAllType($v->tid);
            foreach($val as $va){
                $tname = $va->tname;
            }
            $v->tid = $tname;
            $class[] = $v;
        }
        return $class;
    }

    public function selectSchool()
    {
        $data = \DB::table('college')->get();
        return $data;
    }

    public function sClass($id)
    {
        $data = \DB::table('class')->where('cid','=',$id)->get();
        $tid = [];
        $all = [];
        foreach($data as $v){
            $tid [] = $v->tid;
        }
        foreach($tid as $k=>$va){
            $data = $this->findAllType($va);
            $bid = $data[0]->bid;
            $array = explode('2-',$bid);
            $bid = array_pop($array);
            $bdata = $this->findAllType($bid);
            $data[0]->bid = $bdata[0]->tname;
            $all[] = $data[0];
        }
        return $all;
    }
}
