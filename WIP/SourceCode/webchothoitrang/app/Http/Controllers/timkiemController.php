<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\POSTINGs;
use App\USERs;

class timkiemController extends Controller
{
    public function getDanhSach(){
    	$postings = "";
    	return view('customer.timkiem.danhsach', ['postings'=>$postings]);
    }

   
    public function getABC(Request $request, $id){

    	$postings = POSTINGs::where([['Details', 'like', '%'.$request->timkiem.'%'], ['Statuss', "2"]])->orderBy('PostTimes', 'desc')->get();

    	

    	return view('customer.timkiem.danhsach', ['postings'=>$postings]);
    }
}
