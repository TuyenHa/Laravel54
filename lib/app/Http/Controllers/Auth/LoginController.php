<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use Illuminate\Http\Request;
use Auth;
class LoginController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Login Controller
    |--------------------------------------------------------------------------
    |
    | This controller handles authenticating users for the application and
    | redirecting them to your home screen. The controller uses a trait
    | to conveniently provide its functionality to your applications.
    |
    */

    use AuthenticatesUsers;

    /**
     * Where to redirect users after login.
     *
     * @var string
     */
    protected $redirectTo = '/';

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('guest', ['except' => 'logout']);
    }
    public function getLogin(){
        return view('auth.login');
    }
    public function postLogin(Request $request){
        if($request->remember =='Remember Me'){
            $remember=true;
        }else{
            $remember=false;
        }
        $arr = array('email' =>$request->email ,'password'=>$request->password );
        if(Auth::attempt($arr,$remember)){
            return redirect('home');
        }else{
            return redirect()->back()->with('error','Email hoặc mật khẩu không đúng');
        }
    }
    public function logout(){
        Auth::logout();
        return redirect('/');
    }
}
