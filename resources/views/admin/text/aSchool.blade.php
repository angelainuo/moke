@extends('admin.base.base')
@section('title')
添加学校
@endsection
@section('content')
<section class="content-header">
          <h1>
            学校表
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
                  <h3 class="box-title"><span class="glyphicon glyphicon-th-list">&nbsp;添加大类</span></h3>
                </div><!-- /.box-header -->
                <div class="box-body">
                  <table id="example2" class="table table-bordered table-hover">
					<form class="form-horizontal" action="{{ URL('admin/addSchool') }}" method="post">
						<tbody>
						   <tr>
							<td>
								<input type="hidden" name="_token" value="{{ csrf_token() }}">
								<div class="form-group">
										<label for="inputEmail3" class="col-sm-1 control-label">学校名称</label>
										<div class="col-sm-5">
											<input type="text" class="form-control" id="inputEmail3" name="sname">
					
										</div>
									</div>
									
							</td>
							</tr>
							<tr>
								<td>
								   <div class="form-group">
										<label for="inputEmail3" class="col-sm-1 control-label">课程类别</label>
										<div class="col-sm-5">
											<select name="type">
												@foreach($data as $v)
												<option value="{{ $v->id }}">{{ $v->tname }}</option>
												@endforeach
											</select>
										</div>
									</div>
								   
								</td>
							</tr>
							<tr>
								<td>
								   <div class="form-group">
										<label for="inputEmail3" class="col-sm-1 control-label">课程视频上传</label>
										<div class="col-sm-5">
											<input type="file" name="file">
										</div>
									</div>
								   
								</td>
							</tr>
							<tr>
								<td>
									<div class="box-footer">
										<button type="submit" class="btn btn-default btn-info" style="position:absolute;left:230px">添加</button>
										<button type="submit" class="btn btn-default btn-info"  style="position:absolute;left:350px" >重置</button>
									</div>	

								</td>
						   </tr>
						  
						</tbody>
                   
					</form>
                  </table>
                </div><!-- /.box-body -->
              </div><!-- /.box -->

              
            </div><!-- /.col -->
          </div><!-- /.row -->
        </section><!-- /.content -->
@endsection