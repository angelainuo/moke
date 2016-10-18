@extends('admin.base.base')
@section('title')
 	所有所有课程
@endsection
@section('content')
<section class="content">
          <div class="row">
            <div class="col-xs-12">
              <div class="box">
                <div class="box-header">
                  <h3 class="box-title"><span class="glyphicon glyphicon-th-list">&nbsp;查看所有课程</span></h3>
                </div><!-- /.box-header -->
                <div class="box-body">
                <div class="form-group">

                    <div class="col-sm-3">
                      <form class="form-horizontal">
                        <div class="row">
                          <div class="col-sm-10">
                            <input type="text" class="form-control" id="inputEmail3" placeholder="请输入用户名称">
                          </div>
                          <label for="inputEmail3" class="col-sm-1 control-label"><button type="submit" class="btn btn-xs btn-primary" >查询</button></label>
                        </div>
                      </form>
                    </div>
                  </div>

                  <table id="example2" class="table table-bordered table-hover">
                    <thead>
                      <tr>
                        <th>序号</th>
                        <th>课程类别</th>
                        <th>学校</th>
                        <th>模式</th>
						            <th>权威</th>
                        <th>状态</th>
                        <th>老师</th>
                        <th>其他</th>
                        <th>图片</th>
                        <th>课程简介</th>
                        <th>课程内容</th>
                        <th>操作</th>
                      </tr>
                    </thead>
                    <tbody>
                       @foreach($data as $v)
                      <tr>
                        <td>{{ $v->iid }}</td>
                        <td>{{ $v->tid }}</td>
                        <td>{{ $v->cid }}</td>
                        <td>{{ $v->model }}</td>
						            <td>{{ $v->auth }}</td>
                        <td>{{ $v->status }}</td>
                        <td>{{ $v->teacher }}</td>
                        <td>{{ $v->className }}</td>
                        <td>{{ $v->image }}</td>
                        <td>{{ $v->content }}</td>
                        <td>{{ $v->info}}</td>
                        <td><a href='{{ URL("admin/delClass/$v->iid") }}'><button class="btn btn-xs btn-danger">删除</button></a> </td>
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
