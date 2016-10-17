@extends("admin.base.base")
@section("title")
  查看公告
@endsection
@section("content")
   <section class="content">
          <div class="row">
            <div class="col-xs-12">
              <div class="box">
                <div class="box-header">
                  <h3 class="box-title"><span class="glyphicon glyphicon-th-list">&nbsp;查看公告</span></h3>
                </div><!-- /.box-header -->
                <div class="box-body">
                <div class="form-group">
                   
                    <div class="col-sm-3">
                      <form class="form-horizontal" action="{{ URL('admin/tell') }}" method="get">
                        <div class="row">
                          <div class="col-sm-10">
                            <!-- <input type="hidden" name="_token" value="{{ csrf_token() }}"> -->
                            <input type="text" class="form-control" id="inputEmail3" placeholder="请输入公告标题" name="title">
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
                        <th>公告标题</th>
                        <th>详情</th>
                        <th>发布时间</th>
                        <th>失效时间</th>
                        <th>操作</th>
                      </tr>
                    </thead>
                    <tbody>
                      @foreach($data as $v)
                      <tr>
                        <td>{{ $v->id }}</td>
                        <td>{{ $v->title }}</td>
                        <td>{{ $v->content }}</td>
                        <td>{{ $v->mtime }}</td>
                        <td>{{ $v->loseTime }}</td>
                        <td><a class="btn btn-xs btn-danger" href='{{ URL("admin/tell/delete/$v->id") }}'>删除</a> </td>
                      </tr>
                      @endforeach
                    </tbody>
                    <tfoot>
                      
                    </tfoot>
                  </table>
                </div><!-- /.box-body -->
              </div><!-- /.box -->

              {!! $data->render() !!}
            </div><!-- /.col -->
          </div><!-- /.row -->
        </section><!-- /.content -->
@endsection