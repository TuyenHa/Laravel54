<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Model\Categories;
use App\Http\Requests\CateRequest;
use DB;
class CateController extends Controller
{
	public function getCategory(){
		$data['cate']=DB::table('vp_categories')->simplePaginate(4);
		return view('backend.category',$data);
	}
	public function getAddCaterory(){
		return view('backend.addcategory');
	}
	public function PostaddCaterory(CateRequest $request){
		$Categories=new Categories;
		$Categories->cate_name=$request->name;
		$Categories->cate_link=$request->link;
		$Categories->save();
		return redirect('admincp/category')->with('succsess','Thêm thành công');
	}
	public function deleteCategory($id){
		Categories::Destroy($id);
		return redirect('admincp/category')->with('succsess','Xóa thành công');
	}
	public function getEditCategory($id){
		$data['category']=Categories::find($id);
		return view('backend.editcategory',$data);
	}
	public function postEditCategory(Request $request,$id){
		$cate=Categories::find($id);
		$cate->cate_name=$request->name;
		$cate->cate_link=$request->link;
		$cate->save();
		return redirect('admincp/category')->with('succsess','Sửa thành công');
	}

}
