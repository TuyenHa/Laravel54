@extends('backend.master')
@section('Sửa sản phẩm')
@section('body')
<div class="col-sm-9 col-sm-offset-3 col-lg-10 col-lg-offset-2 main">		
	<div class="row">
		<ol class="breadcrumb">
			<li><a href="{{asset('admincp/index')}}"><svg class="glyph stroked home"><use xlink:href="#stroked-home"></use></svg></a></li>
			<li><a href="{{asset('admincp/products')}}">Sản phẩm</a></li>
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
				<div class="panel-heading"><svg class="glyph stroked table"><use xlink:href="#stroked-table"/></svg>
					<use xlink:href="#stroked-email"></use></svg>Sửa sản phẩm</div>
					<div class="panel-body">
						<form class="form-horizontal" method="post" enctype="multipart/form-data">
							<fieldset>
								{{csrf_field()}}
								<!-- Name input-->
								<div class="form-group">
									<label class="col-md-3 control-label" for="name">Tên sản phẩm</label>
									<div class="col-md-6">
										<input id="name" name="name" type="text" value="{{$product->prod_name}}" placeholder="Nhập tên sản phẩm" class="form-control">
									</div>
								</div>
								<div class="form-group">
									<label class="col-md-3 control-label" for="name">Danh Mục</label>
									<div class="col-md-6">
										<select name="category" class="form-control">
											@foreach($prod_Cate as $key)
											<option value="{{$key->cate_id}}">{{$key->cate_name}}</option>
											@endforeach();
										</select>
									</div>
								</div>
								<div class="form-group">
									<label class="col-md-3 control-label" for="name">Giá</label>
									<div class="col-md-6">
										<input id="name" name="price" type="text" value="{{$product->prod_price}}" placeholder="Nhập giá" class="form-control">
									</div>
								</div>
								<!-- Email input-->
								<div class="form-group">
									<label class="col-md-3 control-label" for="email">Bảo hành</label>
									<div class="col-md-6">
										<input id="email" name="warranty" value="{{$product->prod_warranty}}" type="text" placeholder="Nhập bảo hành" class="form-control">
									</div>
								</div>
								<div class="form-group">
									<label class="col-md-3 control-label" for="name">Tình trạng</label>
									<div class="col-md-6">
										<input id="name" name="condition" value="{{$product->prod_condition}}" type="text" placeholder="Nhập tình trạng" class="form-control">
									</div>
								</div>
								<div class="form-group">
									<label class="col-md-3 control-label" for="name">Phụ kiện</label>
									<div class="col-md-6">
										<input id="name" name="accessories" value="{{$product->prod_accessories}}" type="text" placeholder="Nhập phụ kiện" class="form-control">
									</div>
								</div>
								<div class="form-group">
									<label class="col-md-3 control-label" for="name">Khuyến mãi</label>
									<div class="col-md-6">
										<input id="name" name="promotion" value="{{$product->prod_promotion}}" type="text" placeholder="Nhập khuyến mãi" class="form-control">
									</div>
								</div>
								<div class="form-group">
									<label class="col-md-3 control-label" for="name">Sale</label>
									<div class="col-md-6">
										<input id="name" name="sale" type="radio" @if($product->prod_name==1) {{"checked"}}@endif value="1">Có
										<input id="name" name="sale" type="radio" @if($product->prod_name==0) {{"checked"}}@endif value="0">Không
									</div>
								</div>
								<div class="form-group">
									<label class="col-md-3 control-label" for="name">Hình ảnh</label>
									<div class="col-md-6">
										<input id="img" type="file" name="img" class="form-control hidden" onchange="changeImg(this)">
										<img id="avatar" class="thumbnail" width="300px" src="{{asset("lib/storage/app/$product->prod_img")}}">
									</div>
								</div>

								<!-- Message body -->
								<div class="form-group">
									<label class="col-md-3 control-label" for="message">Mô tả</label>
									<div class="col-md-6">
										<textarea name="description"  class="form-control ckeditor" >{{$product->prod_description}}</textarea>
										<script type="text/javascript">
										var baseURL="{{url('/')}}"
var editor = CKEDITOR.replace('description',{
language:'vi',
filebrowserImageBrowseUrl: baseURL+'/ckfinder/ckfinder.html?Type=Images',
filebrowserFlashBrowseUrl: baseURL+'/ckfinder/ckfinder.html?Type=Flash',
filebrowserImageUploadUrl: baseURL+'/ckfinder/core/connector/php/connector.php?command=QuickUpload&type=Images',
filebrowserFlashUploadUrl: 'ckfinder/core/connector/php/connector.php?command=QuickUpload&type=Flash',
});
</script>	
									</div>
								</div>
								<div class="form-group">
									<label class="col-md-3 control-label" for="name">Đặc biệt</label>
									<div class="col-md-6">
										<input id="name" name="featured" type="radio" @if($product->prod_featured==1) {{"checked"}} @endif value="1">Có 
										<input id="name" name="featured" type="radio" @if($product->prod_featured==0) {{"checked"}} @endif value="0">Không
									</div>
								</div>
								<div class="form-group">
									<label class="col-md-3 control-label" for="name">Link thân thiện</label>
									<div class="col-md-6">
										<input id="name" name="link" type="text" value="{{$product->prod_link}}"  placeholder="Nhập link thân thiện" class="form-control">
									</div>
								</div>
								<!-- Form actions -->
								<div class="form-group">
									<div class="col-md-9 widget-right">
										<button type="submit" class="btn btn-danger btn-md pull-right">Sửa sản phẩm</button>
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