<?php

namespace App\Http\Controllers\Fontend;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Model\Products;
use App\Model\Categories;
use App\Model\Comment;
use DB;
class ViewProductController extends Controller
{
	public function getViewProduct($id){
		$data['category']=Categories::all();
		$data['prod_popular']=Products::where('prod_id','>',1)->orderBy('prod_id','asc')->take(3)->get();
		$data['product_popular']=Products::where('prod_id','>',1)->orderBy('prod_id','desc')->take(3)->get();
		$data['viewprod']=Products::find($id);
		$data['comment']=Comment::find($id);
		return view('fontend.viewproduct',$data);
	}
	
}
