<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Model\Comment;
use DB;
class CommentController extends Controller
{
	public function getComment(){
		$data['comment']=DB::table('vp_comment')->Paginate(5);
		return view('backend.comment',$data);
	}
	public function deleteComment($id){
		Comment::Destroy($id);
		return redirect('admincp/comment')->with('succsess','Xóa thành công');
	}

}
