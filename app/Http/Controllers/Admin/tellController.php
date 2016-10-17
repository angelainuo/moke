<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\model\models;

class tellController extends Controller
{
    
    public function tell(Request $request)
    {
    	$model = new models();
    	$data = $model->selectTell($request);
    	// dd($data);
    	return view('admin.tell.tell')->with('data',$data);
    }

    public function delete($id)
    {
    	$model = new models();
    	$data = $model->deleteTell($id);
    	return $data;
    }

    public function atell()
    {
        return view('admin.tell.atell');
    }

    public function add(Request $request)
    {
    	$model = new models();
        $data = $model->insertTell($request);
        if($data>0){
            return $this->tell($request);
        }else{
            return $this->atell();
        }
    }

}
