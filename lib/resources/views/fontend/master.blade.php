<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>HD-COMPUTER - @yield('title')</title>
	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">
	<!-- Latest compiled and minified CSS -->
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css">
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
	<link rel="stylesheet" type="text/css" href="{{url('/css/style.css')}}">
	<link rel="stylesheet" type="text/css" href="{{url('/css/viewproduct.css')}}">
	<link rel="stylesheet" type="text/css" href="{{url('/font-awesome-4.7.0/css/font-awesome.min.css')}}">
	<link rel="stylesheet" type="text/css" href="css/viewproduct.css">
	<script src="{{asset('ckeditor/ckeditor.js')}}" type="text/javascript"></script>
		<script src="{{asset('ckfinder/ckfinder.js')}}" type="text/javascript"></script>
	<!--Icons-->
	<script src="js/lumino.glyphs.js"></script>
</head>
<body>
	<header id="header">
		<div class="header_top">
			<div class="container">
				<div class="row">
					<div class="col-sm-6">
						<div class="contactinfo">
							<ul class="nav nav-pills">
								<li><a href="#"><i class="fa fa-phone"></i>0982097131</a></li>
								<li><a href="#"><i class="fa fa-envelope"></i>hatuyen1994@gmail.com</a></li>
							</ul>
						</div>
					</div>
					<div class="col-sm-6">
						<div class="social-icons pull-right">
							<ul class="nav nav-pills">
								<li><a href="#"><i class="fa fa-facebook"></i></a></li>
								<li><a href="#"><i class="fa fa-twitter"></i></a></li>
								<li><a href="#"><i class="fa fa-linkedin"></i></a></li>
								<li><a href="#"><i class="fa fa-dribbble"></i></a></li>
								<li><a href="#"><i class="fa fa-google-plus"></i></a></li>
							</ul>
						</div>		
					</div>
				</div>
			</div>
		</div>
		<div class="header_middle">
			<div class="container">
				<div class="row">
					<div class="col-sm-4">
						<div class="logo pull-left">
							<a href="{{url('/')}}" title=""><img src="{{asset('img/3.png')}}" alt=""></a>
						</div>
					</div>
					<div class="col-sm-4">
						<div class="search-form">
							<input type="text" class="form-control" placeholder="Search"/>
						</div>
					</div>
					<div class="col-sm-4">
						<div class="cart pull-right">
							<a href="{{url('Cart/show')}}">Giỏ hàng <span class="badge">{{Cart::count()}}</span></a>
							<i class="fa fa-cart-plus"></i>
						</div>
					</div>
				</div>
			</div>
		</div>
		<div class="header_bottom">
			<div class="container">
				<div class="row">
					<div class="col-sm-12">
						<nav class="nav-color navbar-default">
							<div class="navbar-header">
								<button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#menu">
									<span class="sr-only">Toggle navigation</span>
									<span class="icon-bar"></span>
									<span class="icon-bar"></span>
									<span class="icon-bar"></span>
								</button>
							</div>
							<div class="navbar-collapse collapse" id="menu">
								<ul class="nav navbar-nav">
									<li><a href="">Trang chủ</a></li>
									<li><a href="">Giới thiệu</a></li>
									<li><a href="">Tin tức</a></li>
									<li><a href="">Thương hiệu</a></li>
									<li><a href="">Liên hệ</a></li>
								</ul>
							</div>
						</nav>
					</div>
				</div>
			</div>	
		</div>
	</header><!-- /header -->
	<section id="slider">
		<div class="container">
			<div class="row">
				<div class="col-sm-12">
					<div id="slider-carousel" class="carousel slide" data-ride="carousel">
						<ol class="carousel-indicators">
							<li data-target="#slider-carousel" data-slide-to="0" class="active"></li>
							<li data-target="#slider-carousel" data-slide-to="1"></li>
							<li data-target="#slider-carousel" data-slide-to="2"></li>
						</ol>

						<div class="carousel-inner">
							<div class="item active">
								<div class="col-sm-6">
									<h1><span>E</span>-SHOPPER</h1>
									<h2>Free E-Commerce Template</h2>
									<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. </p>
									<button type="button" class="btn btn-default get">Get it now</button>
								</div>
								<div class="col-sm-6">
									<img src="{{asset('images/home/girl1.jpg')}}" class="girl img-responsive" alt="" />
									<img src="images/home/pricing.png"  class="pricing" alt="" />
								</div>
							</div>
							<div class="item">
								<div class="col-sm-6">
									<h1><span>E</span>-SHOPPER</h1>
									<h2>100% Responsive Design</h2>
									<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. </p>
									<button type="button" class="btn btn-default get">Get it now</button>
								</div>
								<div class="col-sm-6">
									<img src="{{asset('images/home/girl2.jpg')}}" class="girl img-responsive" alt="" />
									<img src="{{asset('images/home/pricing.png')}}"  class="pricing" alt="" />
								</div>
							</div>

							<div class="item">
								<div class="col-sm-6">
									<h1><span>E</span>-SHOPPER</h1>
									<h2>Free Ecommerce Template</h2>
									<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. </p>
									<button type="button" class="btn btn-default get">Get it now</button>
								</div>
								<div class="col-sm-6">
									<img src="{{asset('images/home/girl3.jpg')}}" class="girl img-responsive" alt="" />
									<img src="{{asset('images/home/pricing.png')}}" class="pricing" alt="" />
								</div>
							</div>	
						</div>
						<a href="#slider-carousel" class="left control-carousel hidden-xs" data-slide="prev">
							<i class="fa fa-angle-left"></i>
						</a>
						<a href="#slider-carousel" class="right control-carousel hidden-xs" data-slide="next">
							<i class="fa fa-angle-right"></i>
						</a>
					</div>

				</div>
			</div>
		</div>
	</section>
	<section>
		<div class="container">
			<div class="row">
				<div class="col-sm-3">
					<div class="left-sidebar">
						<h2 class="title">Danh Mục</h2>
						<div class="list-group">
							@foreach($category as $key)
							<a href="{{$key->cate_link}}" class="list-group-item">
								{{$key->cate_name}}
							</a>
							@endforeach
						</div>
					</div>
					<div class="left-sidebar-adv">
						<h2 class="title">Quảng Cáo</h2>
						<img src="{{asset('images/home/shipping.jpg')}}" class="img-responsive" alt="">
					</div>
				</div>
				<div class="col-sm-9">
					@yield('body')
				</div>
			</div>	
			<div class="container">
				<div class="row">
					<div class="col-sm-12">
						<div class="recommended_items"><!--recommended_items-->
							<h2 class="title">Sản Phẩm Thịnh Hành</h2>

							<div id="recommended-item-carousel" class="carousel slide" data-ride="carousel">
								<div class="carousel-inner">
									<div class="item active">
										@foreach($prod_popular as $key)
										<div class="col-sm-4">
											<div class="product-image-wrapper">
												<div class="single-products">
													<div class="productinfo text-center">
														<img height="260" width="300" src="{{asset('lib/storage/app/')}}/{{$key->prod_img}}" alt="" />
														<h2>{{$key->prod_price}} VND</h2>
														<p>{{$key->prod_name}}</p>
														<a href="#" class="btn add-to-cart"><i class="fa fa-shopping-cart"></i>Mua Hàng</a>
													</div>

												</div>
											</div>
										</div>
										@endforeach
									</div>
									<div class="item">	
										@foreach($product_popular as $key)
										<div class="col-sm-4">
											<div class="product-image-wrapper">
												<div class="single-products">
													<div class="productinfo text-center">
														<a href="{{asset('viewproduct')}}/{{$key->prod_id}}" title=""><img height="260" width="300" src="{{asset('lib/storage/app/')}}/{{$key->prod_img}}" alt="" /></a>
														<h2>{{$key->prod_price}} VND</h2>
														<p><a href="{{asset('viewproduct')}}/{{$key->prod_id}}" title="">{{$key->prod_name}}</p></a>
														<a href="#" class="btn add-to-cart"><i class="fa fa-shopping-cart"></i>Mua Hàng</a>
													</div>

												</div>
											</div>
										</div>
										@endforeach
									</div>
								</div>
								<a class="left recommended-item-control" href="#recommended-item-carousel" data-slide="prev">
									<i class="fa fa-angle-left"></i>
								</a>
								<a class="right recommended-item-control" href="#recommended-item-carousel" data-slide="next">
									<i class="fa fa-angle-right"></i>
								</a>			
							</div>
						</div><!--/recommended_items-->

					</div>
				</div>	
			</div>
		</section>
		<footer>
			<div class="footer-top">
				<div class="container">
					<div class="row">
						<div class="col-sm-3">
							<div class="companyinfo">
								<h2>HD-COMPUTER</h2>
								<span>Đây là trang web của công ty HD-COMPUTER</span>
							</div>
						</div>	
						<div class="col-sm-6">

						</div>
						<div class="col-sm-3">

						</div>
					</div>
				</div>
			</div>
			<div class="footer-middle">
				<div class="container">
					<div class="row">
						<div class="col-sm-9">
							<div class="footer_info">
								<div class="col-sm-3">
									<h2>VỀ CHÚNG TÔI</h2>
									<ul class="nav nav-pills nav-stacked">
										<li><a href="" title="">Liên hệ</a></li>
										<li><a href="" title="">Chính sách</a></li>
										<li><a href="" title="">Quy định thanh toán</a></li>
										<li><a href="" title="">Tuyển Dụng</a></li>
									</ul>
								</div>
								<div class="col-sm-3">
									<h2>KHÁCH HÀNG</h2>								<ul class="nav nav-pills nav-stacked">
									<li><a href="" title="">Chế độ bảo hành</a></li>
									<li><a href="" title="">Quy định bảo hành</a></li>
									<li><a href="" title="">Chính sách giao dịch</a></li>
									<li><a href="" title="">Mua hàng online</a></li>
								</ul>
							</div>
							<div class="col-sm-3">
								<h2>TỔNG ĐÀI HỖ TRỢ</h2>
								<ul class="nav nav-pills nav-stacked">
									<li><a href="" title="">Liên hê:0982097131</a></li>
									<li><a href="" title="">Tư vấn:19008198</a></li>
									<li><a href="" title="">Chăm sóc:19008119</a></li>
									<li><a href="" title="">Kĩ thuật:198</a></li>
								</ul>
							</div>
						</div>	

					</div>
					<div class="col-sm-3">
						<div class="fb">
							<iframe src="https://www.facebook.com/plugins/page.php?href=https%3A%2F%2Fwww.facebook.com%2Fsvtinhoc&tabs=timeline&width=300&height=150&small_header=true&adapt_container_width=true&hide_cover=false&show_facepile=true&appId=518885748224554" width="300" height="200" style="border:none;overflow:hidden" scrolling="no" frameborder="0" allowTransparency="true"></iframe>
						</div>
					</div>
				</div>
			</div>
		</div>
		<div class="footer-bottom">
			<div class="container">
				<div class="row">
					<div class="col-sm-9">
						Copyright © 2017 HD-COMPUTER. All rights reserved.
					</div>
					<div class="col-sm-3">
						Designed by <a href="https://www.facebook.com/motthoihamchoi" title="Thông tin cá nhân">Mưa Đêm</a>
					</div>	
				</div>
			</div>
		</div>
	</footer>
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js" integrity="sha384-0mSbJDEHialfmuBBQP6A4Qrprq5OVfW37PRR3j5ELqxss1yVqOtnepnHVP9aJ7xS" crossorigin="anonymous"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/holder/2.9.1/holder.min.js"></script>
	</html>