<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class kientrucxaydungController extends Controller
{
    public function DanhSachXayDung(){
    	return view('layouts.xaydungkientruc.xaydung');
    }
    public function DanhSachKienTruc(){
    	return view('layouts.xaydungkientruc.kientruc');
    }
}
