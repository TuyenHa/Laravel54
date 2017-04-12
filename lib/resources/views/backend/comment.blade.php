@extends('backend.master')
@section('title','Quản Lý Comment')
@section('body')
<div class="col-sm-9 col-sm-offset-3 col-lg-10 col-lg-offset-2 main">
	<div class="row">
		<ol class="breadcrumb">
			<li><a href="{{asset('admincp/index')}}"><svg class="glyph stroked home"><use xlink:href="#stroked-home"></use></svg></a></li>
			<li><a href="{{asset('admincp/comment')}}">Bình Luận</a></li>
		</ol>
	</div><!--/.row-->
		@include('errors.note')

	<div class="panel panel-default panel-table">
		<form method="post">
			<div class="panel-heading">
				<div class="row">
					<div class="col col-xs-6">
						<h3 class="panel-title">Quản Lý Danh Mục</h3>
					</div>
				</div>
			</div>
			<div class="panel-body">
				<table class="table table-striped table-bordered  table-responsive table-hover">
					<thead>
						<tr>
							<th><em class="fa fa-cog"></em></th>
							<th class="hidden-xs">ID</th>
							<th>Email</th>
							<th>Họ tên</th>
							<th>Nội Dunh</th>
							<th>Sản phẩm comment</th>
						</tr> 
					</thead>
					<tbody>
						@foreach($comment as $key)
						<tr>
							<td align="center">
								<a href="{{asset('admincp/comment/delete/'.$key->com_id)}}" style="color:#fff;text-decoration: none;" title="Xóa danh mục" onclick="return confirm('Bạn có chắc chắn muốn xóa?')"><button type="button" class="btn btn-danger"><em class="fa fa-trash"></em></button></a>
							</td>
							<td>{{$key->com_id}}</td>
							<td>{{$key->com_name}}</td>
							<td>{{$key->com_email}}</td>
							<td>{{$key->com_content}}</td>
							<td>{{$key->com_product}}</td>
						</tr>
						@endforeach
					</tbody>
				</table>

			</div>
			<div class="panel-footer">
				<div class="row">
					<div class="col col-xs-4">
					</div>
					<div class="col col-xs-8">
						<ul class="pagination hidden-xs pull-right">
							<li>{{$comment->links()}}</li>
							
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
