@extends('backend.master')
@section('title','Sửa danh mục')
@section('body')
<div class="col-sm-9 col-sm-offset-3 col-lg-10 col-lg-offset-2 main">		
	<div class="row">
		<ol class="breadcrumb">
			<li><a href="{{asset('admincp/index')}}"><svg class="glyph stroked home"><use xlink:href="#stroked-home"></use></svg></a></li>
			<li><a href="{{asset('admincp/category')}}">Danh mục</a></li>
			  <li class="active">Sửa sản phẩm</li>
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
									<label class="col-md-3 control-label" for="name">Tên danh mục</label>
									<div class="col-md-6">
										<input id="name" name="name" type="text" placeholder="Nhập tên danh mục" value="{{$category->cate_name}}" required="" class="form-control">
									</div>
								</div>
								<div class="form-group">
									<label class="col-md-3 control-label" for="name">Link thân thiện</label>
									<div class="col-md-6">
										<input id="name" name="link" required="" type="text" value="{{$category->cate_link}}" placeholder="Nhập link thân thiện" class="form-control">
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