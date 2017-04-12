@extends('backend.master')
@section('title','Sửa danh mục')
@section('body')
<div class="col-sm-9 col-sm-offset-3 col-lg-10 col-lg-offset-2 main">		
	<div class="row">
		<ol class="breadcrumb">
			<li><a href="{{asset('admincp/index')}}"><svg class="glyph stroked home"><use xlink:href="#stroked-home"></use></svg></a></li>
			<li><a href="{{asset('admincp/user')}}">Tài khoản</a></li>
			  <li class="active">Sửa tài khoản</li>
		</ol>
	</div><!--/.row-->

	<div class="row">
		<div class="col-lg-12">
			<!-- <h1 class="page-header">Quản Lý Sản Phẩm</h1> -->
		</div>
	</div><!--/.row-->
	<div class="row">
		<div class="col-md-12">
			<div class="panel panel-default">
				<div class="panel-heading"><svg class="glyph stroked clipboard with paper"><use xlink:href="#stroked-clipboard-with-paper"/></svg>
					<use xlink:href="#stroked-table"/></svg>
					<use xlink:href="#stroked-email"></use></svg>Sửa danh muc</div>
					<div class="panel-body">
						@include('errors.note')
						<form class="form-horizontal" method="post">
							<fieldset>
								{{csrf_field()}}
								<!-- Name input-->
								<div class="form-group">
									<label class="col-md-3 control-label" for="name">Tên tài khoản</label>
									<div class="col-md-6">
										<input id="name" name="name" type="text" placeholder="Nhập tên tài khoản" value="{{$user->name}}" required="" class="form-control">
									</div>
								</div>
								<div class="form-group">
									<label class="col-md-3 control-label" for="name">Email</label>
									<div class="col-md-6">
										<input id="name" name="email" type="email" placeholder="Nhập tên email" value="{{$user->email}}"  required="" class="form-control">
									</div>
								</div>
								<div class="form-group">
									<label class="col-md-3 control-label" for="name">Mật khẩu</label>
									<div class="col-md-6">
										<input id="name" name="password" type="password" placeholder="Nhập mật khẩu"   required="" class="form-control">
									</div>
								</div>
								<div class="form-group">
									<label class="col-md-3 control-label" for="name">Nhập lại mật khẩu</label>
									<div class="col-md-6">
										<input id="name" name="repassword" type="password"   placeholder="Nhập lại mật khẩu" required="" class="form-control">
									</div>
								</div>
								<div class="form-group">
									<label class="col-md-3 control-label" for="name">Quản trị viên</label>
									<div class="col-md-6">
										<input type="radio" name="radio" value="1" @if($user->level==1) 
										{{"checked"}}
										@endif >Admin
										<input type="radio" name="radio" value="2" @if($user->level==2) 
										{{"checked"}}
										@endif  >Thành Viên
									</div>
								</div>
								<!-- Form actions -->
								<div class="form-group">
									<div class="col-md-9 widget-right">
										<button type="submit" class="btn btn-danger btn-md pull-right">Sửa danh mục</button>
									</div>
								</div>
							</fieldset>
						</form>
					</div>
				</div>
			</div><!--/.col-->
		</div><!--/.row-->
	</div>	<!--/.main-->
	@stop