@extends('admin.base.base')
@section('title')
添加课程
@endsection
@section('content')
<section class="content-header">
          <h1>
            课程表
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
                  <h3 class="box-title"><span class="glyphicon glyphicon-th-list">&nbsp;添加课程</span></h3>
                </div><!-- /.box-header -->
                <div class="box-body">
                  <table id="example2" class="table table-bordered table-hover">
					<form class="form-horizontal" action="{{ URL('admin/insertClass') }}" method="post">
						<tbody>
							 <tr>
							<td>
								<div class="form-group">
										<label for="inputEmail3" class="col-sm-1 control-label">学校名称</label>
										<div class="col-sm-5">
											<input type="text" class="form-control" id="inputEmail3" value="{{ $cname }}" name="{{ $id }}" readonly>
					
										</div>
									</div>
									
							</td>
							</tr>
						   <tr>
							<td>
								<input type="hidden" name="_token" value="{{ csrf_token() }}">
								<div class="form-group">
										<label for="inputEmail3" class="col-sm-1 control-label">课程名称</label>
										<div class="col-sm-5">
											<input type="text" class="form-control" id="inputEmail3" name="cname">
					
										</div>
									</div>
									
							</td>
							</tr>
							<tr>
								<td>
								   <div class="form-group">
										<label for="inputEmail3" class="col-sm-1 control-label">课程类别</label>
										<div class="col-sm-5">
											<select name="cid">]
												<!-- <option value="0">-课程-</option> -->
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
										<label for="inputEmail3" class="col-sm-1 control-label">模式</label>
										<div class="col-sm-5">
											随堂<input type="radio" class="iradio_flat-green disabled" id="inputEmail3" name="modal" value="0" checked>&nbsp&nbsp
											自主<input type="radio" class="iradio_flat-green disabled" id="inputEmail3" name="modal" value="1">
										</div>
									</div>
								   
								</td>
							</tr>
							<tr>
								<td>
								   <div class="form-group">
										<label for="inputEmail3" class="col-sm-1 control-label">权威</label>
										<div class="col-sm-5">
											数字认证<input type="radio" class="iradio_flat-green disabled" id="inputEmail3" name="auth" value="0" checked>&nbsp&nbsp
											认证开放<input type="radio" class="iradio_flat-green disabled" id="inputEmail3" name="auth" value="1">
					
										</div>
									</div>
								   
								</td>
							</tr>
							<tr>
								<td>
								   <div class="form-group">
										<label for="inputEmail3" class="col-sm-1 control-label">课程状态</label>
										<div class="col-sm-5">
											<select name="status">
												<option value="0">即将开课</option>
												<option value="1">已开课</option>
												<option value="2">已结束</option>
											</select>
										</div>
									</div>
								   
								</td>
							</tr>
							<tr>
								<td>
								   <div class="form-group">
										<label for="inputEmail3" class="col-sm-1 control-label">授课老师</label>
										<div class="col-sm-5">
											<input type="text" class="form-control" id="inputEmail3" name="teacher">
										</div>
									</div>
								   
								</td>
							</tr>
							<tr>
								<td>
								   <div class="form-group">
										<label for="inputEmail3" class="col-sm-1 control-label">课程介绍</label>
										<div class="col-sm-5">
											<textarea class="form-control" rows="3" placeholder="请输入大类详情 " name="info"></textarea>
										</div>
									</div>
								   
								</td>
							</tr>
							<tr>
								<td>
								   <div class="form-group">
										<label for="inputEmail3" class="col-sm-1 control-label">课程图片上传</label>
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