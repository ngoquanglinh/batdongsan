<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class phongthuyController extends Controller
{
    public function DanhSachPhongThuy(){
    	return view('layouts.phongthuy.phongthuy');
    }
}
