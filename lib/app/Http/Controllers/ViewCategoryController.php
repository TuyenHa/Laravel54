<?php

namespace App\Http\Controllers\Fontend;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Model\Products;
class ViewCategoryController extends Controller
{
	public function getViewCategory($link){
		$data['viewcate']=Products::where('prod_cate',$link)->get();
		return view('fontend.viewcategory',$data);
	}
}
