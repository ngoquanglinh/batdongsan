<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class noingoaithatController extends Controller
{
    public function  DanhSachNoiNgoaiThat(){
    	return view('layouts.noingoaithat.noingoaithat');
    }
}
