<?php
namespace App\Http\Controllers\Admin;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Requests\UserRequest;
use DB;
use Hash;
use App\User;
class UserController extends Controller
{
	public function getHome(){
		return view('backend.index');
	}
	public function getUsers(){
		$data['user']=DB::table('vp_users')->Paginate(4);
		return view('backend.users',$data);	
	}
	public function getAddUser(){
		return view('backend.adduser');
	}
	public function postAddUser(UserRequest $request){
		$pass=$request->password;
		$repass=$request->repassword;
		if($pass == $repass){
			$user=new User;
			$user->name=$request->name;
			$user->email=$request->email;
			$user->password=Hash::make('$request->password');
			$user->level=$request->radio;
			$user->remember_token=$request->_token;
			$user->save();
			return redirect('admincp/user')->with('succsess','Thêm thành công');
		}else{
			return redirect()->back()->with('error','Mật khẩu không khớp nhau');
		}
	}
	public function deleteUser($id){
		User::Destroy($id);
		return redirect('admincp/user')->with('succsess','Xóa thành công');
	}
	public function getEditUser($id){
		$data['user']=User::find($id);
		return view('backend.edituser',$data);
	}
	public function postEditUser(Request $request,$id){
		$user=User::find($id);
		$pass=$request->password;
		$repass=$request->repassword;
		if($pass == $repass){
			$user->name=$request->name;
			$user->email=$request->email;
			$user->password=Hash::make('$request->password');
			$user->level=$request->radio;
			$user->remember_token=$request->_token;
			$user->save();
			return redirect('admincp/user')->with('succsess','Sửa thành công');
		}else{
			return redirect()->back()->with('error','Mật khẩu không khớp nhau');
		}
	}

}
