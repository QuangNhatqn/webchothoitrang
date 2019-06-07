<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\SERVICESs;
class servicesController extends Controller
{
    public function getDanhSach()
    {
    	$services = SERVICESs:: all();
    	return view('admin.services.danhsach', ['services'=>$services]);
    }
    public function getSua($id)
    {
    	$services = SERVICESs::find($id);
    	return view('admin.services.sua', ['services'=>$services]);
    }
    public function postSua(Request $request, $id)
    {
    	$services = SERVICESs::find($id);
    	
    	$services->Typess = $request->loaidv;
    	$services->ServiceCosts = $request->gia;
    	
    	$services -> save();
    	
    	return redirect('admin/services/sua/'.$id)->with('thongbao','Sửa thành công!!');
    }
}
