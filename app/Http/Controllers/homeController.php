<?php

namespace App\Http\Controllers;
use App\danhmuc;
use Illuminate\Http\Request;

class homeController extends Controller
{
    public function index(){
    	return view('layouts.index');
    }

    
}
