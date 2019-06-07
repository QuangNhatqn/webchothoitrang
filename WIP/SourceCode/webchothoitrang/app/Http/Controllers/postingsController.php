<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\POSTINGs;

class postingsController extends Controller
{
     public function getDanhSach()
    {
    	// $postings = POSTINGs::orderBy('Statuss','DESC')->get();
    	$postings = POSTINGs::all();
    	return view('admin.postings.danhsach', ['postings'=>$postings]);
}	
	 public function getSua($id)
    {
    	$postings = POSTINGs::find($id);
    	return view('admin.postings.sua', ['postings'=>$postings]);
    }
    public function postSua(Request $request, $id)
    {
    	$postings = POSTINGs::find($id);
    	
    	$postings->Categorys = $request->danhmuc;
    	$postings-> save();
    	
    	return redirect('admin/postings/sua/'.$id)->with('thongbao','Sửa thành công!!');

    }
    public function getXoa($id)
    {
    	$postings = POSTINGs::find($id);
    	
    	$postings->Statuss = '3';
    	$postings-> save();
    	
    	return redirect('admin/postings/danhsach')->with('thongbao','Tin '.$id.' Đã chuyển sang trạng thái Admin xóa');
    }
     public function getDSDuyetTin()
    {
    	// $postings = POSTINGs::orderBy('Statuss','DESC')->get();
    	$postings = POSTINGs::where('Statuss', '1')->get();
    	return view('admin.postings.dsduyettin', ['postings'=>$postings]);
}	
public function getDuyet($id)
    {
    	$postings = POSTINGs::find($id);
    	
    	$postings->Statuss = '2';
    	$postings-> save();
    	
    	return redirect('admin/postings/dsduyettin')->with('thongbao','Tin số '.$id.' đã được duyệt!!');
    }
}
