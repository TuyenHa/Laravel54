
<div id="wrap-inner" class="col-md-9">
	<div class="row list-product">
		<div class="col-md-12">
			<div class="clearfix"></div>
			<h3>Thông tin khách hàng</h3>
			<p>
				<span class="info">Khách hàng: </span>
				{{$info['txthoten']}}
			</p>
			<p>
				<span class="info">Email: </span>
				{{$info['txtemail']}}
			</p>
			<p>
				<span class="info">Điện thoại: </span>
				{{$info['txtsdt']}}
			</p>
			<p>
				<span class="info">Địa chỉ: </span>
				{{$info['txtdiachi']}}
			</p>
			<p>
				<span class="info">Hình thức giao hàng: </span>
				{{$info['txthinhthuc']}}
			</p>
		</div>
		<div class="col-md-12">
			<div class="clearfix"></div>
			<h3>Hóa đơn mua hàng</h3>
			<table border="1" cellpadding="10" cellspacing="0">
				<tr>
					<td>Tên sản phẩm</td>
					<td>Giá</td>
					<td>Số lượng</td>
					<td>Thành tiền</td>
				</tr>
				@foreach($cart as $item)
				<tr>
					<td>{{$item->name}}</td>
					<td style="color:red;font-weight: bold">{{number_format($item->price,0,',','.')}} VNĐ</td>
					<td>{{$item->qty}}</td>
					<td style="color:red;font-weight: bold">{{number_format($item->price*$item->qty,0,',','.')}} VNĐ</td>
				</tr>
				@endforeach
				<tr>
					<td colspan="3">Tổng tiền:</td>
					<td style="color:red;font-size: 24px;font-weight: bold">{{Cart::total()}} VNĐ</td>
				</tr>
			</table>
		</div>
	</div>			
</div>
