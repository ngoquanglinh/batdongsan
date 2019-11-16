<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class duancontroller extends Controller
{
    public function DuAnBatDongSan(){
    	return view("layouts/duan.duanbatdongsan");
    }
}
