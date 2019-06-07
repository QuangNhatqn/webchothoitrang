<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\COINTRADINGs;

class cointradingsController extends Controller
{
    public function getDanhSach(){
    	$cointradings = COINTRADINGs::all();
    	return view('admin.cointradings.danhsach', ['cointradings'=>$cointradings]);
    }
    public function getXoa($id)
    {
    	$cointradings = COINTRADINGs::find($id);
    	$cointradings->delete();

    	return redirect('admin/cointradings/danhsach')-> with('thongbao','Bạn đã xóa thành công');
    }
}
