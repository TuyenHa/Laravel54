	@extends('fontend.master')
	@section('title','Giỏ hàng của bạn')
	@section('body')
	<div class="cart">
		@if(Cart::count() != 0)
		<h2 class="titleh2" style="color: red;font-size: 22px; border-bottom: 1px solid red;"><i class="fa fa-desktop" aria-hidden="true"></i>
			Giỏ hàng của bạn</h2>
			<form method="post">
				<table class="table table-bordered table-hover table-responsive">
					<thead>
						<tr class="success">
							<th>Tên sản phẩm</th><th>Hình</th><th>Giá</th><th>Số lượng</th><th>Tổng tiền</th><th>Chức năng</th>
						</tr>
					</thead>
					<tbody>

						@foreach ($cart as $key)
						<tr>
							<td> {{$key->name}}</td>
							<td><img class="img-responsive img-thumbnail" width="80" height="40" src="{{asset("lib/storage/app/".$key->options->img)}}" alt=""></td>
							<td><span class="price">{{number_format($key->price,0,',','.')}} VND</span></td>
							<td><input onchange="updateCart('{{$key->rowId}}',this.value)" value="{{$key->qty}}" class="form-control" type="number"></td>
							<td><span id="{{$key->rowId}}" class="price">{{number_format($key->price * $key->qty,0,',','.')}} đ</span></td>
							<td><a href="{{asset('Cart/delete')}}/{{$key->rowId}}" title=""><button type="button" class="btn btn-info btn-xs">Xóa Hàng</button></a>
							</td>
						</tr>
						@endforeach
					</tbody>
				</table>
				<p><a href="{{url('Cart/delete/all')}}" title="Xóa giỏ hàng"><button type="button" class="btn btn-danger btn-sm">Xóa Giỏ Hàng</button></a> | <a href="#" class="btn btn-info btn-sm">Cập nhật</a>
				</p>

				Tổng tiền : <span id="total" style="color: red;font-weight: bold;" class="total-price">{{Cart::total()}} VND</span>
			</form>
			<script type="text/javascript">
				function updateCart(rowId,qty){
					$.get(
						"{{asset('Cart/update')}}",
						{qty:qty,rowId:rowId},
						function(result){
							result = JSON.parse(result);
							$('#total').html(result.total_price);
							$('#'+rowId).html(result.sub_price);

						}
						)	
				}
			</script>

			<form method="post" action="{{route('postEmail')}}"> 
				{{csrf_field()}}
				<div class="jumbotron">
					<h3 style="color: #00FF00"><i class="fa fa-user-circle-o" aria-hidden="true"></i>Thông tin khách hàng</h3>
					<div class="form-group">
						<label for="exampleInputEmail1">Họ tên</label>
						<input type="text" class="form-control" name="txthoten"  placeholder="Nhập họ tên (bắt buộc)">

					</div>
					<div class="form-group">
						<label for="exampleInputPassword1">Email</label>
						<input type="email" class="form-control" name="txtemail"  placeholder="Nhập email (bắt buộc)">
					</div>
					<div class="form-group">
						<label for="exampleInputFile">Số điện thoại</label>
						<input type="text" class="form-control" name="txtsdt"  placeholder="Nhập số điện thoại (bắt buộc)">
					</div>
					<div class="form-group">
						<label for="exampleInputFile">Địa chỉ</label>
						<input type="text" class="form-control" name="txtdiachi"  placeholder="Nhập địa chỉ (bắt buộc)">
					</div>
					<div class="form-group">
						<label for="exampleInputFile">Hình thức thanh toán</label>
						<input type="radio" name="txthinhthuc"   placeholder="Nhập họ tên (bắt buộc)" value="Giao tận nơi">Giao tận nơi  | <input type="radio" name="txthinhthuc"  placeholder="Nhập họ tên (bắt buộc)" value="Nhận ở cửa hàng">Nhận ở cửa hàng
					</div>

					<button type="submit" class="btn btn-info btn-md">Gửi đơn hàng</button>
				</div>
			</form>
			@else
			<p class="text-center alert alert-info">Không có sản phẩm trong giỏ hàng</p>
			@endif

		</div>
		@stop
