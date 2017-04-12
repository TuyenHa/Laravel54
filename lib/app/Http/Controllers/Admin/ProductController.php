<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Model\Categories;
use App\Model\Products;
use DB;
use Storage;
class ProductController extends Controller
{
	public function getProducts(){
		//get product
		$data['product']=DB::table('vp_products')->Paginate(4);	
		return view('backend.products',$data);
	}
	public function getAddProduct(){
		$data['prod_Cate']=Categories::all();
		return view('backend.addproduct',$data);
	}
	public function postAddProduct(Request $request){
		$product = new Products;
		$product->prod_name=$request->name;
		$product->prod_price=$request->price;
		$product->prod_warranty=$request->warranty;	
		$product->prod_accessories=$request->accessories;
		$product->prod_condition=$request->condition;
		$product->prod_promotion=$request->promotion;
		$product->prod_description=$request->description;
		$product->prod_featured=$request->featured;
		$product->prod_sale=$request->sale;
		$product->prod_cate=$request->category;
		$product->prod_link=$request->link;
		$path = $request->img->store('img');
		$product->prod_img = $path;
		$product->save();
		return redirect('admincp/products')->with('succsess','Thêm thành công');
	}
	public function deleteProduct($id){
		$prod=Products::find($id);
		Products::Destroy($id);
		Storage::delete($prod->prod_img);
		return redirect('admincp/products')->with('succsess','Xóa thành công');
	}
	public function getEditProduct($id){
		$data['prod_Cate']=Categories::all();
		$data['product']=Products::find($id);
		return view('backend.editproduct',$data);	
	}
	public function postEditProduct(Request $request,$id){
		$prod=Products::find($id);
		$arr=['prod_name'=>$request->name,
		'prod_price'=>$request->price,
		'prod_warranty'=>$request->warranty,
		'prod_accessories'=>$request->accessories,
		'prod_condition'=>$request->condition,
		'prod_promotion'=>$request->promotion,
		'prod_description'=>$request->description,
		'prod_featured'=>$request->featured,
		'prod_sale'=>$request->sale,
		'prod_cate'=>$request->category,
		'prod_link'=>$request->link,
		];
		if($request->hasFile('img')){
			Storage::delete($prod->prod_img);
			$file_path = $request->img->store('img');  
			$arr['prod_img'] = $file_path;
		}
		Products::where('prod_id',$id)->update($arr);
		return redirect('admincp/products')->with('succsess','Sửa Thành Công');
	}
}
