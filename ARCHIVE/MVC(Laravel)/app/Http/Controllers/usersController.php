<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\USERs;

class usersController extends Controller
{
    public function getDanhSach()
    {
    	$users = USERs::all();
    	return view('admin.users.danhsach', ['users'=>$users]);
}
    public function getSua($id)
    {
    	$users = USERs::find($id);
    	return view('admin.users.sua', ['users'=>$users]);
    }
    public function postSua(Request $request, $id)
    {
    	$users = USERs::find($id);
    	$this->validate($request, 
    		[
    			'hoten'=>'required|min:3|max:100'
    			// |unique:USERs,FullNames
    		], 
    		[
    			'hoten.required'=>'Bạn chưa nhập tên users',
    			// 'hoten.unique'=>'Tên users tồn tại',
    			'hoten.min'=>'Tên users phải có độ dài từ 3-100 kí tự',
    			'hoten.max'=>'Tên users phải có độ dài từ 3-100 kí tự'
    		]);
    	$users->FullNames = $request->hoten;
    	$users->Emails = $request->email;
    	$users->PhoneNumbers = $request->sdt;
    	$users->Passwords = $request->pw;
    	$users->Coins = $request->tien;
    	$users->UserTypes = $request->type;
    	$users -> save();
    	return redirect('admin/users/sua/'.$id)->with('thongbao','Sửa thành công');

    }
    public function getXoa ($id){
    	$users = USERs::find($id);
    	$users ->delete();

    	return redirect('admin/users/danhsach')->with('thongbao', 'Bạn đã xóa thành công');
    }
}
