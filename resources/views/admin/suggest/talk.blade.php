@extends("admin.base.base")
@section("title")
  用户禁言
@endsection
@section("content")

   <section class="content">
          <div class="row">
            <div class="col-xs-12">
              <div class="box">
                <div class="box-header">
                  <h3 class="box-title"><span class="glyphicon glyphicon-th-list">&nbsp;用户禁言</span></h3>
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
                        <th>编号</th>
                        <th>评价内容</th>
                        <th>评价时间</th>
                        <th>等级</th>
                        <th>操作</th>
                      </tr>
                    </thead>
                    <tbody>
                      @foreach($data as $v)
                      <tr>
                        <td>{{ $v->id }}</td>
                        <td>{{ $v->content }}</td>
                        <td>{{ $v->time }}</td>
                        <td><a href='{{ URL("admin/talk/$v->id") }}'><button class="btn btn-xs btn-info" id="elitle">{{ $v->eltile==1?'加精':'普通' }}</button></a>&nbsp;
              <button class="btn btn-xs btn-danger" id="top">{{ $v->top==1?'置顶':'普通' }}</button> 
            </td>
                        <td> <button class="btn btn-xs btn-danger">删除</button></td>
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