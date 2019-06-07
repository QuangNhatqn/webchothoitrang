<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Http\Response;
use App\Http\Requests;


class TestController extends Controller
{
    public function Hello(){
    	echo "hi word!!";
    }
    public function Ten($ten){
    	echo "Tên: ".$ten;
    	return redirect()->route('MyRoute1');
    }
    public function GetURL(Request $request){
    	// return $request->path();
    	// return $request->URL();
    	// if($request -> isMethod('get'))
    	// {
    	// 	echo "là phương thức get";
    	// }
    	// else echo "không là get";
    	if($request -> is('My*'))
    	{
    		echo "có My";
    	}
    	else
    		echo "không My";
    }
    //Gửi nhận tham số trên Request
    public function postForm(Request $request){
    	if($request->has('Tuoi'))
    	{
    		echo "Có trường tuổi";
    		echo '<br>';
    	}
    	else {
    		echo "không trường tuổi";
    		echo '<br>';
    	}
    	echo "Tên của bạn là: ". $request->HoTen;
    	// echo $request->input('HoTen');
    }
    //Sử dụng Cookie với request và response
    public function setCookie(){
    	$response = new Response();
    	$response->withCookie('TestCookies', 'hi word!!', 1);
    	echo "đã set cookie";
    	return $response;
    }
    public function getCookie(Request $request){
    	echo "cookie của bạn là: ";
    	return $request->cookie('TestCookies');
    }

    //Upload File
    public function postFile(Request $request){
    	if($request->hasFile('myFile'))
    	{
    		$file = $request->file('myFile');
    		//lưu với tên gốc
    		// $fileName = $file->getClientOriginalName('myFile');
    		// $file-> move('img', $fileName);
    		$file ->move('img', 'file.jpg');
    		echo "up ảnh thành công";
    	}
    	else
    		echo "chưa có file";
    }
}
