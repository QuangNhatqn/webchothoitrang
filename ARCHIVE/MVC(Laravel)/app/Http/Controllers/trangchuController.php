<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class trangchuController extends Controller
{
    public function getTrangChu()
    {
    	return view('customer.trangchu.trangchu');
}
}
