@extends('fontend.master')
@section('body')
@section('title','Khôi phục mật khẩu')
<div class="col-sm-12">
	<div class="row">
		<div class="resetpass">
			<h2 class="titleh2" style="color: red;font-size: 22px; border-bottom: 1px solid red;"><i class="fa fa-desktop" aria-hidden="true"></i>
				Khôi phục mật khẩu</h2>
				<form action="" method="get"> 
				{{csrf_field()}}
					<table class="table-responsive table-hover table-bordered">
						<tbody>
						<!-- <tr>
							<td>Tên tài khoản</td><td><input type="text" name="name" value="" required="" class="form-control" placeholder="Vui lòng nhập tài khoản"></td>
						</tr> -->
						<tr>
							<td>Email</td><td><input class="form-control" type="email" name="email" value="" required="" placeholder="Vui lòng nhập email"></td>
						</tr>
						<tr>
							<td></td><td><input type="submit" class="btn btn-danger" name="email" value="Khôi phục"></td>
						</tr>
					</tbody>
				</table>
			</form>
		</div></div>
	</div>
	@stop