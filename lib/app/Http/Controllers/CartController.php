<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Cart,Mail;
use App\Model\Products;
use App\Model\Categories;
use App\Model\Comment;
class CartController extends Controller
{
	public function getAdd(Request $request){
		$pro=Products::find($request->id);
		$cart=Cart::add(['id' =>$pro->prod_id, 'name' =>$pro->prod_name, 'qty' => 1, 'price' =>$pro->prod_price,'options' => ['img' => $pro->prod_img]]);
		return redirect('Cart/show');
	}
	public function getCart(){
		$data['cart']=Cart::content();
		return view('fontend.cart',$data);
	}
	public function deleteCart($id){
		if($id=='all'){
			Cart::destroy();
			return redirect('/');
		}else{
			Cart::remove($id);
			return redirect('Cart/show');
		}
	}
	public function getUpdate(Request $request){
		Cart::update($request->rowId, $request->qty);
		$arr = array();
		$data = Cart::content();
		foreach($data as $val){
			if($val->rowId == $request->rowId){
				$arr['sub_price'] = number_format($val->price * $request->qty,0,',','.')." vnd";
			}
		}
		$arr['total_price'] = Cart::total()." vnd";
		$json = json_encode($arr);
		echo $json;
	}
	public function postEmail(Request $request){
		$data['info']=$request->all();
		$data['cart']=Cart::content();
		$email=$request->txtemail;
		Mail::send('fontend.mail',$data,function($msg) use ($email){
			$msg->from('hatuyen1994@gmail.com','Hóa đơn bán hàng');
			$msg->cc('yeuthuongngaynao@gmail.com',$name=null);
			$msg->to($email)->subject('Hóa đơn của shop computer');
		});
		Cart::destroy();
		return redirect('Cart/done');
	}
	public function getDone(){
		return view('fontend.done');
	}
	
}
