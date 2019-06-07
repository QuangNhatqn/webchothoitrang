<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\User;


class trangchuController extends Controller
{
    public function getTrangChu()
    {
    	return view('customer.trangchu.trangchu');
}
	public function getDangnhap()
	{
		return view('customer.dangnhap.login');
	}
	 public function postDangnhap (Request $request){
       
        if(Auth::attempt(['email'=>$request->em, 'password'=>$request->pw]))
        {
            return redirect('customer/trangchu/trangchu');
        }
        else
        {
            return redirect('customer/dangnhap')->with('thongbao', 'Đăng nhập thất bại');
        }
    }
     public function getDangxuat()
    {
        Auth::logout();
        return redirect('customer/dangnhap');
    }
}
