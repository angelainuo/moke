@extends('admin.base.base')
@section('title')
  权限管理界面
@endsection
@section('content')
        <!-- Content Header (Page header) -->
        <section class="content-header">
          <h1>
            权限表
            <small>表格管理</small>
          </h1>
          <ol class="breadcrumb">
            <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
            <li><a href="#">Tables</a></li>
            <li class="active">Data tables</li>
          </ol>
        </section>
         <div id="loginmodal" style="display:none;">
    <h1>权限分配</h1>
    <form id="loginform" name="loginform" method="post" action="">
      用户管理<input type="checkbox" name="auth[]" value="1" class="row">&nbsp&nbsp
      分类管理<input type="checkbox" name="auth[]" value="2" class="row">&nbsp&nbsp
      课程管理<input type="checkbox" name="auth[]" value="3" class="row">&nbsp&nbsp
      视频管理<input type="checkbox" name="auth[]" value="4" class="row">&nbsp&nbsp
      帖子管理<input type="checkbox" name="auth[]" value="5" class="row">
      {!! csrf_field() !!}
      <div class="center"><input type="submit" name="loginbtn" id="loginbtn" class="flatbtn-blu hidemodal" value="确定" tabindex="3"></div>
    </form>
  </div>
        <!-- Main content -->
        <section class="content">
          <div class="row">
            <div class="col-xs-12">
              <div class="box">
                <div class="box-header">
                  <h3 class="box-title"><span class="glyphicon glyphicon-th-list">&nbsp;权限管理</span></h3>
                </div><!-- /.box-header -->
                <div class="box-body">
                  <table id="example2" class="table table-bordered table-hover">
                    <thead>
                      <tr>
                        <th>编号</th>
                        <th>管理员姓名</th>
                        <th>Email</th>
                       
                        <th>操作</th>
                      </tr>
                    </thead>
                    <tbody>
                      @foreach($data as $v)
                      <tr>
                        <td>{{ $v->id }}</td>
                        <td><a href='{{ URL("admin/person/$v->id") }}'>{{ $v->name }}</a></td>
                        <td>{{ $v->email }}</td>
                       
                        <td><a href="#loginmodal"  class="modaltrigger">权限分配</a></td>
                      </tr>
                      @endforeach
                    </tbody>
                    <tfoot>
                      
                    </tfoot>
                  </table>
                </div><!-- /.box-body -->
              </div><!-- /.box -->

              
            </div><!-- /.col -->
          </div><!-- /.row -->
        </section><!-- /.content -->
  
@endsection

@section('myscript')
 <link rel="shortcut icon" href="http://designshack.net/favicon.ico">
  <link rel="icon" href="http://designshack.net/favicon.ico">
  <link rel="stylesheet" type="text/css" media="all" href="{{ asset('modal/style.css') }}">
  <script type="text/javascript" src="{{ asset('modal/js/jquery-1.9.1.min.js') }}"></script>
  <script type="text/javascript" charset="utf-8" src="{{ asset('modal/js/jquery.leanModal.min.js') }}"></script>
 <script type="text/javascript">
     $(function(){
  $('#loginform').submit(function(e){
    return true;
  });
  
  $('.modaltrigger').leanModal({ top: 110, overlay: 0.45, closeButton: ".hidemodal" });
});
 </script>
@endsection