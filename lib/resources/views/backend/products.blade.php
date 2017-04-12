@extends('backend.master')
@section('title','Quản Lý Sản Phẩm')
@section('body')
<div class="col-sm-9 col-sm-offset-3 col-lg-10 col-lg-offset-2 main">
	<div class="row">
		<ol class="breadcrumb">
			<li><a href="{{asset('admincp/index')}}"><svg class="glyph stroked home"><use xlink:href="#stroked-home"></use></svg></a></li>
			<li><a href="{{asset('admincp/products')}}">Sản phẩm</a></li>
		</ol>
	</div><!--/.row-->
	@include('errors.note')

	<div class="panel panel-default panel-table">
		<form method="post" >
			<div class="panel-heading">
				<div class="row">
					<div class="col col-xs-6">
						<h3 class="panel-title">Quản Lý Sản Phẩm</h3>
					</div>
					<div class="col col-xs-6 text-right">
						<button type="submit" class="btn btn-sm btn-danger btn-create"><a href="{{url('admincp/products/add')}}" style="color:#fff;text-decoration: none;" title="">Thêm Sản Phẩm</a></button>
					</div>
				</div>
			</div>
			<div class="panel-body">
				<table class="table table-striped table-bordered  table-responsive table-hover">
					<thead>
						<tr>
							<th><em class="fa fa-cog"></em></th>
							<th>Sản phẩm</th>
							<th>Giá</th>
							<th>Hình ảnh</th>
							<th>Bảo Hành</th>
							<th>Phụ kiện</th>
							<th>Trạng thái</th>
							<th>Đặc biệt</th>
							<th>Sale</th>
						</tr> 
					</thead>
					<tbody>
						@foreach($product as $key)
						<tr>
							<td align="center">
								<a href="{{asset('admincp/products/edit/'.$key->prod_id)}}" style="color:#fff;text-decoration: none;" title="Sửa danh mục"><button type="button" class="btn btn-primary"><em class="fa fa-pencil"></em></button></a>
								<a href="{{asset('admincp/products/delete/'.$key->prod_id)}}" style="color:#fff;text-decoration: none;" title="Xóa danh mục" onclick="return confirm('Bạn có chắc chắn muốn xóa?')"><button type="button" class="btn btn-danger"><em class="fa fa-trash"></em></button></a>
							</td>
							<td>{{$key->prod_name}}</td>
							<td>{{$key->prod_price}}</td>
							<td><img width="100" height="50" src="{{asset('lib/storage/app/'.$key->prod_img)}}" alt="{{$key->prod_name}}"></td>
							<td>{{$key->prod_warranty}}</td>
							<td>{{$key->prod_accessories}}</td>
							<td>{{$key->prod_condition}}</td>
							<td>{{$key->prod_featured}}</td>
							<td>{{$key->prod_sale}}</td>
						</tr>
						@endforeach
					</tbody>
				</table>
			</div>
			<p style="color:red;font-size: 16px;font-weight: bold;">Chú ý : 1- là Có  0 là Không</p>
			<div class="panel-footer">
				<div class="row">
					<div class="col col-xs-4">
					</div>
					<div class="col col-xs-8">
						<ul class="pagination hidden-xs pull-right">
							<li>{{$product->links()}}</li>
							
						</ul>
						<ul class="pagination visible-xs pull-right">
							<li><a href="#">«</a></li>
							<li><a href="#">»</a></li>
						</ul>
					</div>
				</div>
			</div>
		</form>
	</div>
</div>
@stop
