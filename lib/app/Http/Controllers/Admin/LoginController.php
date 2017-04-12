<?php

namespace App\Http\Controllers\Admin;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Auth;
class LoginController extends Controller
{
	public function getLogin(){
		return view('backend.login');
	}
	public function postLogin(Request $request){
		$arr = ['email' => $request->email, 'password' => $request->password,'level'=>'1'];
		if($request->remember=='Remember Me'){
			$remember=true;
		}else{
			$remember=false;
		}
		if(Auth::attempt($arr,$remember)){
			return redirect('admincp/index')->with('succsess','Chào mừng bạn đăng nhập thành công vào trang quản trị');
		}else{
			return redirect()->back()->with('error','Tài khoản hoặc mật khẩu chưa đúng.Hoặc bạn không đủ quyền truy cập');	
		}
	}
	public function Logout(){
		Auth::logout();
		return redirect('admincp');
	}
}
