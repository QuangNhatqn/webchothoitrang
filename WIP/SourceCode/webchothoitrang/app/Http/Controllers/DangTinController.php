<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\USERs;
use App\POSTINGs;

class DangTinController extends Controller
{
    public function getNhap()
    {
    	return view('customer.dangtin.nhap');
    }
    public function postNhap(Request $request, $id)
    {
    	$date = date('Y-m-d H:i:s'); 
    	$postings = new POSTINGs;
    	$postings->UserIDs = $id;
    	$postings->Categorys = $request->danhmuc;
    	$postings->Type1s = $request->type1;
    	$postings->Type2s = $request->type2;
    	$postings->Addresss = $request->diachi;
    	$postings->Costs = $request->gia;
    	$postings->Conditions = $request->tinhtrang;
    	$postings->Titles = $request->tieude;
    	$postings->Details = $request->mota;
    	$postings->Transportations = $request->giaonhan;
    	$postings->PostTimes = $date;
    	$postings->Statuss = "1";
    	
  

    	if($request->hasFile('hinh1'))
    	{
    		$file = $request->file('hinh1');
    		$name = $file->getClientOriginalName();
    		while(file_exists("img").$hinh1){
    		$hinh1 = str_random(4)."_".$name;}
    		$file->move("img", $hinh1);
    		$postings->URLImage1s = $hinh1;
    		
    	}
    	else
    	{
    		$postings->URLImage1s = "";
    	}



    	$postings->save();
    	return redirect('customer/dangtin/nhap')->with('thongbao', 'Thêm thành công');

    }
}
