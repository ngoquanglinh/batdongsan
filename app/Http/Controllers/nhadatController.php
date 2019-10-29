<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class nhadatController extends Controller
{
    public function nhadatban(){
    	return view('layouts.nhadat');
    }
    public function nhadatchothue(){
    	return view('layouts.nhadat');
    }
}
