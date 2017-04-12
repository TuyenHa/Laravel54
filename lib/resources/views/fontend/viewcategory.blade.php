@extends('fontend.master')
@section('title','Xem danh mục sản phẩm')
@section('body')
<link rel="stylesheet" href="{{asset('css/viewproduct.css')}}">
<div class="list-products-new">
	<h2 class="title">Danh Mục Sản Phẩm</h2>
	<div class="col-sm-4">
	@foreach($viewcate as $key)
		<div class="product-image-wrapper">
			<div class="single-products">
				<div class="productinfo text-center">
					<img src="images/home/product4.jpg" alt="" />
					<h2>{{$key->prod_price}}</h2>
					<p>Easy Polo Black Edition</p>
					<a href="{{asset('Cart/add')}}/{{$key->prod_id}}" class="btn add-to-cart"><i class="fa fa-shopping-cart"></i>Mua Hang</a>
				</div>

				<img src="images/home/new.png" class="new" alt="" />
			</div>
		</div>
		@endforeach
	</div>
	<div class="col-sm-4">
		<div class="product-image-wrapper">
			<div class="single-products">
				<div class="productinfo text-center">
					<img src="images/home/product4.jpg" alt="" />
					<h2>$56 USD</h2>
					<p>Easy Polo Black Edition</p>
					<a href="" class="btn  add-to-cart"><i class="fa fa-shopping-cart"></i>Add to cart</a>
				</div>
				<img src="images/home/new.png" class="new" alt="" />
			</div>
		</div>
	</div>
	<div class="col-sm-4">
		<div class="product-image-wrapper">
			<div class="single-products">
				<div class="productinfo text-center">
					<img src="images/home/product4.jpg" alt="" />
					<h2>$56 USD</h2>
					<p>Easy Polo Black Edition</p>
					<a href="#" class="btn add-to-cart"><i class="fa fa-shopping-cart"></i>Add to cart</a>
				</div>

				<img src="images/home/new.png" class="new" alt="" />
			</div>
		</div>
	</div>
</div>
@stop