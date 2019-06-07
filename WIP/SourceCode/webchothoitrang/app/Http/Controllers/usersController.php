<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\USERs;
use Illuminate\Support\Facades\Auth;
use App\User;

class usersController extends Controller
{
//     public function getDanhSach()
//     {
//     	$users = USERs::all();
//     	return view('admin.users.danhsach', ['users'=>$users]);
// }

public function getDanhSach()
    {
        $users = User::all();
        return view('admin.users.danhsach', ['users'=>$users]);
}
    public function getSua($id)
    {
    	$users = User::find($id);
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
    	$users->PhoneNumbers = $request->sdt;
    	$users->Coins = $request->tien;
    	$users->UserTypes = $request->type;

        if($request->changepw == "on")
        {
            $this->validate($request, 
            [
                'pw'=>'required|min:3|max:32',
                'rpw'=>'required|same:pw'
                // |unique:USERs,FullNames
            ], 
            [
                'pw.required'=>'Bạn chưa nhập tên mật khẩu',
                // 'hoten.unique'=>'Tên users tồn tại',
                'pw.min'=>'Mật khẩu phải có độ dài từ 3-32 kí tự',
                'pw.max'=>'Mật khẩu phải có độ dài từ 3-32 kí tự',
                'rpw.required'=>'Bạn chưa nhập lại mật khẩu',
                'rpw.same'=>'Mật khẩu nhập lại chưa khớp'
            ]);
            $users->password = bcrypt($request->pw);
        }
    	$users -> save();
    	return redirect('admin/users/sua/'.$id)->with('thongbao','Sửa thành công');

    }
    public function getXoa ($id){
    	$users = USERs::find($id);
    	$users ->delete();

    	return redirect('admin/users/danhsach')->with('thongbao', 'Bạn đã xóa thành công');
    }


    public function getDangnhapAdmin(){
        return view('admin.dangnhap');
    }

    public function postDangnhapAdmin(Request $request){
        $this->validate($request,[
        'em'=>'required',
        'pw'=>'required|min:3|max:32'
        ], [
        'em.required'=>'Bạn chưa nhập email',
        'pw.required'=>'Bạn chưa nhập password',
        'pw.min'=>'Password không được nhỏ hơn 3 kí tự',
        'pw.max'=>'Password không được lớn hơn 32 kí tự'
        ]);

        if(Auth::attempt(['email'=>$request->em, 'password'=>$request->pw]))
        {
            return redirect('admin/postings/dsduyettin');
        }
        else
        {
            return redirect('admin/dangnhap')->with('thongbao', 'Đăng nhập thất bại');
        }
        

        // $users = User::find(4);
        // $users->password = bcrypt("nhat");
        // $users->save();
        // echo "thanhcong";
    }

    public function getDangxuatAdmin()
    {
        Auth::logout();
        return redirect('admin/dangnhap');
    }

}
