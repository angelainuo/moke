<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| This file is where you may define all of the routes that are handled
| by your application. Just tell Laravel the URIs it should respond
| to using a Closure or controller method. Build something great!
|
*/

Route::get('/admin', function () {
    return view('admin.index.index');
});


Route::get('/','ColageController@shouye');
Route::get('/courses','ClassController@index');

Route::get('/course/{tid}','ClassController@type');
Route::get('/course/{cid}','ClassController@collage');

Route::get('/partners','ColageController@index');

Route::get('/community','ClassController@community');

Route::get('/cloud', function () {
    return view('index.cloud');
});
Route::get('/5', function () {
    return view('index.default');
});
Route::get('/mobile', function () {
    return view('index.mobile');
});
Route::get('/content/{id}','ColageController@post');

Route::get('/add', function () {
    return view('index.add');
});
Route::get('/class/{id}','ColageController@cla');

Route::post('/4','ResgController@res');

Route::post('/demo11','LoginController@dologin');
Route::get('/demo12','LogoutController@logout');

//访问base
// Route::get("/admin",function() {
// 	return view("admin.stu.index");	//首页
// });

// Route::get("/admin",function() {
// 	return view("admin.stu.add");//添加表单
// });
Route::get('/admin',function(){
	return view('admin.user.data');
});
Route::get('admin/login','Admin\LoginController@login');

Route::post('admin/dologin','Admin\LoginController@dologin');

Route::get('admin/captcha/{tmp}','Admin\LoginController@captcha');

Route::get('kit/captcha/{tmp}', 'Admin\kitController@captcha');

//后台界面，需要登入的才能访问，使用中间件进行过滤

Route::group(['prefix'=>'admin','middleware'=>'loginCheck'],function(){
	Route::get('index','Admin\IndexController@index');

	Route::get('logout','Admin\LoginController@logout');
	//用户管理
	Route::get('teach','Admin\userController@teach');
	Route::get('admin','Admin\userController@admin');
	Route::get('stu','Admin\userController@stu');
	Route::get('stuChange/{id}','Admin\userController@stuChange');
	Route::get('type','Admin\typeController@type');
	Route::get('teChange/{id}','Admin\userController@teChange');
	Route::get('stype/{id}','Admin\typeController@stype');

	//类别管理
	Route::get('ustype/{id}','Admin\typeController@ustype');
	Route::post('updateStype','Admin\typeController@updateStype');
	Route::get('astype/{id}','Admin\typeController@astype');
	Route::post('astype/add','Admin\typeController@addStype');
	Route::get('dStype/{id}','Admin\typeController@dStype');
	Route::get('utype/{id}','Admin\typeController@utype');
	Route::post('updateType','Admin\typeController@updateType');
	Route::get('dType/{id}','Admin\typeController@dType');
	Route::get('atype','Admin\typeController@atype');
	Route::post('addType','Admin\typeController@addType');
	//课程管理
	Route::get('class','Admin\classController@aClass');
	Route::get('school','Admin\classController@school');
	Route::get('sClass/{id}','Admin\classController@sClass');
	Route::get('aSchool','Admin\classController@aSchool');
	Route::post('addSchool','Admin\classController@addSchool');
	Route::get('aClass/{id}','Admin\classController@addClass');
	Route::post('insertClass','Admin\classController@insertClass');
	Route::get('delClass/{id}','Admin\classController@delClass');

	//视频管理
	Route::get('wmovie',function(){
		return view('admin.movie.wmovie');
	});

	Route::get('movie',function(){
		return view('admin.movie.movie');
	});

	Route::get('suggest',function(){
		return view('admin.suggest.suggest');
	});


	//公告管理
	Route::get('tell/{ob?}','Admin\tellController@tell');

	Route::get('tell/delete/{id}','Admin\tellController@delete');

	Route::get('atell','Admin\tellController@atell');
	Route::post('atell/add','Admin\tellController@add');
	//显示配置视图
	Route::get('config',function(){
		return view('admin.config.config');
	});
	//帖子管理
	Route::get('reply/{id}','Admin\classController@reply');
	Route::get('talk','Admin\classController@talk');
	Route::get('talk/{id}','Admin\classController@talka');

	//配置管理
	Route::post('config/aa','Admin\confController@config');

	//查找个人详细信息
	Route::resource('person','Admin\personController');
	Route::get('delPerson/{id}','Admin\personController@delPerson');
	Route::get('aPerson',function(){
		return view('admin.user.aPerson');
	});

});

//前台首页

Route::get('home/index',function(){
	return view('index');
});

// Route::get('home/login',function(){
// 	return view('account_login');
// });
Route::post('home/doLogin','Home\loginController@doLogin');
