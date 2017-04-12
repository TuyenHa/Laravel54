@extends('fontend.master')
@section('title','Xem sản phẩm')
@section('body')
<div class="card">
	<div class="wrapper row">
		<div class="preview col-md-6">
			<div class="preview-pic tab-content">
				<div class="tab-pane active" id="pic-1"><img  src="{{asset('lib/storage/app/')}}/{{$details->prod_img}}" /></div>
			</div>
		</div>
		<div class="details col-md-6">
			<h3 class="product-title">{{$details->prod_name}}</h3>
			<div class="rating">
				<div class="stars">
					<span class="fa fa-star checked"></span>
					<span class="fa fa-star checked"></span>
					<span class="fa fa-star checked"></span>
					<span class="fa fa-star"></span>
					<span class="fa fa-star"></span>
				</div>
				<span class="review-no">41 reviews</span>
			</div>
			<p class="product-description">Suspendisse quos? Tempus cras iure temporibus? Eu laudantium cubilia sem sem! Repudiandae et! Massa senectus enim minim sociosqu delectus posuere.</p>
			<h4 class="price">Giá: <span>{{$details->prod_price}} VND</span></h4>
			<p class="vote"><strong>Khuyến mãi :</strong> {{$details->prod_promotion}}<strong></p>
			<h5 class="sizes">Bảo hành :
				<span>{{$details->prod_warranty}}</span>
			</h5>
			<h5 class="colors">Hàng:
				<span>{{$details->prod_condition}}</span>
			</h5>
			<div class="action">
				<a href="{{asset('Cart/add')}}/{{$details->prod_id}}" title=""><button class="add-to-cart btn btn-default" type="button">Mua Hàng</button></a>
			</div>
		</div>
	</div>
	<div class="comment">
		<h2 style="color: #01A9DB;
		font-size: 25px;
		border-bottom:1px solid blue;" class="titleh2">Bình luận <i class="fa fa-commenting-o" aria-hidden="true"></i></h2> 
		@foreach($comment as $key)
		<div style="background-color: #F2F2F2" class="alert  alert-dismissible" role="alert">
			<button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
			<p><strong class="">Họ Tên :</strong>{{$key->com_name}}</p>
			<p><strong>Nội Dung :</strong><p>{!!$key->com_content!!}</p></p>
		</div>
		@endforeach()
	</div>
	<div class="row">
		<div class="comment">
			<div class="col-sm-8">
				<div class="comment-form">
					<h2 style="color: #01A9DB;
	font-size: 25px;
	"><i class="fa fa-pencil-square-o" aria-hidden="true">
						Viết bình luận</i></h2>
						<form method="post">
							{{csrf_field()}}
							<div class="form-group">
								<label for="email">Email:</label>
								<input required type="email" name="email" class="form-control" id="email">
							</div>
							<div class="form-group">
								<label for="name">Tên:</label>
								<input required type="text" name="name" class="form-control" id="name">
							</div>
							<div class="form-group">
								<label for="cm">Bình luận:</label>
								<textarea name="content" required rows="10" id="cm" class="ckeditor form-control"></textarea>
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
							<div class="form-group text-right">
								<button type="submit" class="btn btn-info">Bình luận</button>
							</div>
						</form>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>
@stop