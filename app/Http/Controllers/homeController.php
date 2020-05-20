<?php

namespace App\Http\Controllers;
use App\danhmuc;
use Illuminate\Http\Request;
use App\province;
class homeController extends Controller
{
    public function index(){
        $tinh=province::all();
        $nhadatban=danhmuc::where('d_idparent',1)->get();
    	return view('layouts.index',compact('nhadatban','tinh'));
    }   
}
