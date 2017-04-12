@extends('fontend.master')
@section('title','Trang Chủ')
@section('body')
<div class="col-sm-12">
	<div class="list-products-new">
		<h2 class="title">Sản Phẩm Mới</h2>
		@foreach($product as $key)
		<div class="col-sm-4">
			<div class="product-image-wrapper">
				<div class="single-products">
					<div class="productinfo text-center">
						<a href="{{asset('viewproduct')}}/{{$key->prod_id}}" title=""><img height="260" width="300" src="{{asset('lib/storage/app/')}}/{{$key->prod_img}}" alt="" /></a>
						<h2>{{$key->prod_price}} VND</h2>
						<a href="{{asset('viewproduct')}}/{{$key->prod_id}}" title=""><p>{{$key->prod_name}}</p></a>
						<a href="{{asset('Cart/add')}}/{{$key->prod_id}}" class="btn add-to-cart"><i class="fa fa-shopping-cart"></i> Mua Hàng</a>
					</div>
					@if($key->prod_sale=='1')
					<img src="images/home/sale.png" class="sale" alt="Sản phẩm mới" />
					@endif
					@if($key->prod_featured=='1')
					<img src="images/home/icon_hot.png" class="hot" alt="Sản phẩm hot" />
					@endif
				</div>
			</div>
		</div>
		@endforeach
	</div>
</div>
<div class="col-sm-12">
	<div class="list-products-old">
		<h2 class="title">Danh Sách Sản Phẩm</h2>
		@foreach($productList as $key)
		<div class="col-sm-4">
			<div class="product-image-wrapper">
				<div class="single-products">
					<div class="productinfo text-center">
						<a href="{{asset('viewproduct')}}/{{$key->prod_id}}" title=""><img height="260" width="300" src="{{asset('lib/storage/app/')}}/{{$key->prod_img}}" alt="" /></a>
						<h2>{{$key->prod_price}} VND</h2>
						<p><a href="{{asset('viewproduct')}}/{{$key->prod_id}}" title="{{$key->prod_name}}">{{$key->prod_name}}</a></p>
						<a href="{{asset('Cart/add')}}/{{$key->prod_id}}" class="btn add-to-cart"><i class="fa fa-shopping-cart"></i> Mua Hàng</a>
					</div>
					@if($key->prod_sale=='1')
					<img src="images/home/sale.png" class="sale" alt="Sản phẩm mới" />
					@endif
					@if($key->prod_featured=='1')
					<img src="images/home/icon_hot.png" class="hot" alt="Sản phẩm hot" />
					@endif
				</div>
			</div>
		</div>
		@endforeach
	</div>
	<nav aria-label="Page navigation">
		<ul class="pagination">
			<li>{{$productList->links()}}</li>
		</ul>
	</nav>
</div>
@stop