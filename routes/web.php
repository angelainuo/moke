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

Route::get('/', function () {
    return view('index.index');
});
Route::get('/courses','ClassController@index');

Route::get('/partners','ColageController@index');

Route::get('/community', function () {
    return view('index.fragment');
});
Route::get('/cloud', function () {
    return view('index.cloud');
});
Route::get('/5', function () {
    return view('index.default');
});
Route::get('/mobile', function () {
    return view('index.mobile');
});
