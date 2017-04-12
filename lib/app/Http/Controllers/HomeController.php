<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Model\Products;
use App\Model\Categories;
use App\Model\Comment;
use DB;
class HomeController extends Controller
{
    public function getHome()
    {
        $data['product']=Products::where('prod_id','>',1)->orderBy('prod_id','desc')->take(6)->get();
        $data['productList']=DB::table('vp_products')->Paginate(6);
        $data['prod_popular']=Products::where('prod_id','>',1)->orderBy('prod_id','asc')->take(3)->get();
        $data['product_popular']=Products::where('prod_id','>',1)->orderBy('prod_id','desc')->take(3)->get();
        return view('fontend.home',$data);
    }
    public function getDetails($id){
        $data['details']=Products::find($id);
        $data['comment']=Comment::where('com_product',$id)->get();
        return view('fontend.viewproduct',$data);
    }
    public function postComment(Request $request,$id){
        $Comment=new Comment;
        $Comment->com_name=$request->email;
        $Comment->com_email=$request->name;
        $Comment->com_content=$request->content;
        $Comment->com_product=$id;
        $Comment->save();
        return redirect('viewproduct/'.$id);
    }
    public function index(){
        return view('home');
    }
}
