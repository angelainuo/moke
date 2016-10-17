@extends('admin.base.base')
@section('title')
  个人信息
@endsection
@section('content')
<section class="content-header">
          <h1>
            个人信息表
            <small>表格管理</small>
          </h1>
          <ol class="breadcrumb">
            <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
            <li><a href="#">Tables</a></li>
            <li class="active">Data tables</li>
          </ol>
        </section>

        <!-- Main content -->
        <section class="content">
          <div class="row">
            <div class="col-xs-12">
              <div class="box">
                <div class="box-header">
                  <h3 class="box-title"><span class="glyphicon glyphicon-th-list">&nbsp;学生信息管理</span></h3>
                </div><!-- /.box-header -->
                <div class="box-body">
                <div class="form-group">
                   
                    <div class="col-sm-3">
                      <form class="form-horizontal" method="post" id="myform">
                        <div class="row">
                          <div class="col-sm-10">
                            <input type="hidden" name="_token" value="{{ csrf_token() }}"> 

                            <input type="text" class="form-control" id="inputEmail3" placeholder="请输入学生姓名">
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
                        <th>真实姓名</th>
                        <th>性别</th>
                        <th>介绍</th>
                        <th>加入课程</th>
                        <th>课程数</th>
                        <th>操作</th>
                      </tr>
                    </thead>
                    @if($data)
                    <tbody>
                      @foreach($data as $v)
                      <tr>
                        <td id="id">{{ $v->id }}</td>
                        <td>{{ $v->uid }}</td>
                        <td>{{ $v->sex }}</td>
                        <td>{{ $v->detail }}</td>
                        <td>{{ $v->ke }}</td>
                        <td>{{ $v->count }}</td>
                        <td><input type="submit" class="btn btn-xs btn-danger" id="btn" value="删除"><a href=""><button class="btn btn-xs btn-danger">修改</button> </a></td>
                      </tr>
                      @endforeach
                    </tbody>
                    @else
                    @endif
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
  <script type="text/javascript">
    var id = $('#id').text();
    $('#btn').click(function(){
        $.ajax({
          url:"{{ URL('admin/delPerson/') }}"+'/'+id,
          type:'get',
          dataType:'json',
          success:function(data){
            if(data.length==0){
              return;
            }
             $('tr:has("#id")').empty();
          }
        });
    });
  </script>
@endsection