<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\POSTINGs;
use App\SERVICETRADINGs;

class danhmucController extends Controller
{
     public function getDanhSach($Categorys)
    {
    	$date = date('Y-m-d H:i:s');
    	// $postings = POSTINGs::where('Categorys', $Categorys)->orderBy('PostTimes', 'desc')->get();
    	
    	$postings1 = POSTINGs::join('SERVICETRADINGs', 'POSTINGs.id', '=', 'SERVICETRADINGs.PostingIDs')->where([['Categorys', $Categorys], ['ExecutionTimes','<',$date]])->orderBy('PostTimes', 'desc')->limit('3')->get();

    	$postings2 = POSTINGs::where('Categorys', $Categorys)->orderBy('PostTimes', 'desc')->get();

    	

    	// $servicetradings = SERVICETRADINGs::where([['ServiceIDs', '3'],['ExecutionTimes']])
    	return view('customer.danhmuc.danhsach', ['postings1'=>$postings1], ['postings2'=>$postings2]);
}
	public function getChiTiet($id){
		$postings = POSTINGs::find($id);
		return view('customer.danhmuc.chitiet', ['postings'=>$postings]);
	}

}
