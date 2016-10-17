@extends('admin.base.base')
@section('title')
  学习列表
@endsection
@section('content')
 <!-- Content Header (Page header) -->
   
        <!-- Main content -->
        <section class="content">
          <div class="row">
            <div class="col-xs-12">
              <div class="box">
                <div class="box-header">
                  <h3 class="box-title"><span class="glyphicon glyphicon-th-list">&nbsp;查看所有文档</span></h3>
                </div><!-- /.box-header -->
                <div class="box-body">
                <div class="form-group">
                   
                    <div class="col-sm-3">
                      <form class="form-horizontal">
                        <div class="row">
                          <div class="col-sm-10">
                            <input type="text" class="form-control" id="inputEmail3" placeholder="请输入文档名称">
                          </div>   
                          <label for="inputEmail3" class="col-sm-1 control-label"><button type="submit" class="btn btn-xs btn-primary" >查询</button></label>
                        </div>
                      </form>  
                    </div>
                  </div>
                   
                  <table id="example2" class="table table-bordered table-hover">
                    <thead>
                      <tr>
                        <th>编号</th>
                        <th>学校名称</th>
                        <th>课程类别</th>
                        <th>管理菜单</th>
                        
                      </tr>
                    </thead>
                    <tbody>
                      @foreach($data as $v)
                      <tr>
                        <td>{{ $v->id }}</td>
                        <td>{{ $v->cname }}</td>
                        <td><a href='{{ URL("admin/sClass/$v->id") }}'><button class="btn btn-xs btn-danger">查看</button></a></td>
                        <td><a href="{{ URL('admin/aSchool') }}"><button class="btn btn-xs btn-danger">添加学校</button></a>|<a href=""><button class="btn btn-xs btn-danger">删除</button></a></td>
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