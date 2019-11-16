<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class nhadatController extends Controller
{
    public function NhaDatBan(){
    	return view('layouts.nhadatban.nhadat');
    }
    public function LoaiNhaDatBan(){
    	return view('layouts.nhadatban.loainhadatban');
    }
    
}
