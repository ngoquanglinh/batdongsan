<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class danhbaController extends Controller
{
    public function DanhSachDanhBa(){
    	return view('layouts.danhba.nhamoigioi');
    }
}
