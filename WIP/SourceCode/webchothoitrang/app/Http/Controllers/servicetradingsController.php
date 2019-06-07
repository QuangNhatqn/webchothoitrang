<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\SERVICETRADINGs;

class servicetradingsController extends Controller
{
    public function getDanhSach()
    {
    	$servicetradings = SERVICETRADINGs::all();
    	return view('admin.servicetradings.danhsach', ['servicetradings'=> $servicetradings]);
    }
    public function getSua($id)
    {
    	$servicetradings = SERVICETRADINGs::find($id);
    	return view('admin.servicetradings.sua', ['servicetradings'=>$servicetradings]);
    }
    public function postSua(Request $request, $id)
    {
    	$servicetradings = SERVICETRADINGs::find($id);
    	if($request->tdgd >= $request->tdth)
    	{
    		return redirect('admin/servicetradings/sua/'.$id)->with('errors1','Thời gian thực hiện phải lớn hơn thời gian giao dịch!!');
    	}
    	$servicetradings->ExecutionTimes = $request->tdth;
    	$servicetradings -> save();
    	return redirect('admin/servicetradings/sua/'.$id)->with('thongbao','Sửa thành công!!');
    }
     public function getXoa ($id){
    	$servicetradings = SERVICETRADINGs::find($id);
    	$servicetradings ->delete();

    	return redirect('admin/servicetradings/danhsach')->with('thongbao', 'Bạn đã xóa thành công');
    }
}
