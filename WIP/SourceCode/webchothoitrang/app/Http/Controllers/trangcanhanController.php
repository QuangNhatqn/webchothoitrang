<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\USERs;
use App\POSTINGs;
use App\SERVICETRADINGs;

class trangcanhanController extends Controller
{
    public function getThongTin($id)
    {
        $users = USERs::find($id);
        $users2= USERs::join('POSTINGs', 'USERs.id', '=', 'POSTINGs.UserIDs')->where('USERs.id', $id)->orderBy('PostTimes', 'desc')->get();
        return view('customer.trangcanhan.thongtin', ['users'=>$users], ['users2'=>$users2]);
}
	public function getDayTin($id)
	{
		$date = date('Y-m-d H:i:s');
		$servicetradings = new SERVICETRADINGs;
		$servicetradings->ServiceIDs = "4";
		$servicetradings->PostingIDs = $id;
		$servicetradings->TransactionTimes = $date;
		$servicetradings->ExecutionTimes = $date;
		$servicetradings->save();
		$postings = POSTINGs::find($id);
		$postings->PostTimes = $date;
		$postings->save();
		return redirect('customer/trangcanhan/thongtin/'.$postings->users->id)->with('thongbao', 'Đẩy tin thành công!!');
	}
	public function getAn($id){
		$postings = POSTINGs::find($id);
		$postings->Statuss = "4";
		$postings->save();
		return redirect('customer/trangcanhan/thongtin/'.$postings->users->id)->with('thongbao', 'Ẩn tin thành công!!');
	}
}
