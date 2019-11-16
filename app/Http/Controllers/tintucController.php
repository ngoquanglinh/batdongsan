<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class tintucController extends Controller
{
    public function DanhSach(){
    	return view('layouts.tintuc.tintuc');
    }
}
